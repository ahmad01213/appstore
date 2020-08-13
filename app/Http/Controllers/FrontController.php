<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class FrontController extends Controller
{
    public function login(){
        return view('front-end.login');
    }
    public function home(){
        $rows = Product::paginate(10);
        $about =DB::select('SELECT * FROM pages WHERE TYPE = "about"');
        $whats =DB::select('SELECT * FROM pages WHERE TYPE = "whats"');
        $phone =DB::select('SELECT * FROM pages WHERE TYPE = "phone"');
        return view('front-end.home',compact('rows','about','whats','phone'));
    }
    public function appdetails($id){
       $row = Product::find($id);

        $about =DB::select('SELECT * FROM pages WHERE TYPE = "about"');
        $whats =DB::select('SELECT * FROM pages WHERE TYPE = "whats"');
        $phone =DB::select('SELECT * FROM pages WHERE TYPE = "phone"');
        return view('front-end.appdetails',compact('row','about','whats','phone'));
    }
    public function search(Request $request){
        $input = $request->input;
        $rows = Product::where('name', 'LIKE', '%' . $input . '%')
            ->orWhere('desc', 'LIKE', '%' . $input . '%')
           ->paginate(60);
        return view('front-end.home',compact('rows'));
    }
    public function aboutus(){
        return view('front-end.aboutus');
    }
    public function contactus(){
        return view('front-end.contactus');
    }
    public function messages(Request $request){
        $requestArray = $request->all();
        Contact::create($requestArray);
        return redirect('appdream/home')->with("message","تم إرسال الرسالة بنجاح وسيتم التواصل معكم قريبا");
    }
}
