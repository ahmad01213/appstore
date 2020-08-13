<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\User;
use http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function main() {
        $users = User::all()->take(10);
        $products=Product::all()->take(10);
        return view('home',compact('users','products'));
    }


    //users control
    public function users(){
        $rows = User::all();
        return view('back-end.users.index',compact('rows'));
    }
    public function createuser(){
        return view('back-end.users.create');
    }
    public function edituser($id){
        $row = User::find($id);
        return view('back-end.users.edit',compact('row'));
    }
    public function storeUser(Request $request)
    {
        $requestArray = $request->all();
        $requestArray['password'] = Hash::make($requestArray['password']);
        User::create($requestArray);
        return redirect('admin/users');
    }
    public function logoutAny()
    {

        Auth::logout();
        Session::flush();
        return redirect('/login');    }

    public function updateUser(Request $request, $id)
    {
        $row = User::FindOrFail($id);
        $requestArray = $request->all();
        if (isset($requestArray['password']) && $requestArray['password'] != "") {
            $requestArray['password'] = Hash::make($requestArray['password']);
        } else {
            unset($requestArray['password']);
        }

        $row->update($requestArray);
        return redirect('admin/users');
    }

    public function destroyUser($id)
    {
        User::FindOrFail($id)->delete();
        return redirect('admin/users');
    }

    //apps control
    public function apps(){
        $rows = Product::paginate(20);
        return view('back-end.apps.index',compact('rows'));
    }
    public function createapp(){
        return view('back-end.apps.create');
    }


    public function storeapp(Request $request)
    {
//        dd($request);
        $fileName = $this->fileUpload($request);

        $imageName = $this->imageUpload($request);
        $requestArray = ['image' => $imageName]+['file' => $fileName] + $request->all() + ['type' => 'product'];

        $product = Product::create($requestArray);
        return redirect('admin/apps');
    }

    public function updateapp(Request $request, $id)
    {
        $requestArray = $request->all();

        if ($request->hasFile('image')) {
            $fileName = $this->imageUpload($request);
            $requestArray = ['image' => $fileName] + $requestArray;
        }

        if ($request->hasFile('file')) {
            $fileName = $this->fileUpload($request);
            $requestArray = ['file' => $fileName] + $requestArray;
        }
        $row = Product::FindOrFail($id);
        $row->update($requestArray);
        return redirect('admin/apps');
    }

    public function destroyapp($id)
    {

        Product::Find($id)->delete();
        return redirect('admin/apps');
    }

    public function editapp($id){
        $row = Product::find($id);
        return view('back-end.apps.edit',compact('row'));
    }

    public function downloadapp($id)
    {
        $product = Product::find($id);
        echo "<script>window.open('".$product->file."', '_blank')</script>";
        return ;
    }

    //messages control
    public function messages(){
        $rows = DB::select('SELECT * FROM contacts');
        return view('back-end.messages.index',compact('rows'));
    }
    public function destroyMessage($id)
    {

        DB::select("DELETE FROM contacts WHERE id ='$id'");
        return redirect('admin/messages');
    }
    public function imageUpload(Request $request)
    {
//        $this->validate($request, [
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . 'png';
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            // $this->save();

            return url('images/' . $name);
        }
       }

    public function fileUpload(Request $request)
    {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = $request->name.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $image->move($destinationPath, $name);
            // $this->save();updateSettings
            return url('files/' . $name);
        }
    }

    public function settings(Request $request){
        $about =DB::select('SELECT * FROM pages WHERE TYPE = "about"');
        $whats =DB::select('SELECT * FROM pages WHERE TYPE = "whats"');
        $phone =DB::select('SELECT * FROM pages WHERE TYPE = "phone"');
        return view('back-end.settings.edit',compact('about','whats','phone'));
    }

    public function updateSettings(Request $request){
        $abouttext = $request->abouttext;
        $whats = $request->whats;
        $phone = $request->phone;

        DB::update("UPDATE pages SET TEXT = '$abouttext' WHERE type = 'about'");
        DB::update("UPDATE pages SET TEXT = '$whats' WHERE type = 'whats'");
        DB::update("UPDATE pages SET TEXT = '$phone' WHERE type = 'phone'");
        return redirect('admin/settings')->with('message', ' تم حفظ التعديلات  بنجاح');
    }

}
