<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Owner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()){
            $newSession=Session::getId();
            $user =Auth::user();
            $currentSession = $user->session_id;
            if ($currentSession==$newSession){
                return $next($request);
            }
            return view('front-end.errorlogin');
        }else{
            return redirect('/login');
        }
    }
}
