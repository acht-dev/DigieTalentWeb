<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Auth;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function form()
    {
        if (session()->has('user')){
            return redirect('/dashboard');
        }else{
        return view('auth.login');
        }
    }

    public function attempt(Request $request)
    {
        $this->validate($request, [
            'email' => 'exists:user,username',
            'password' => 'required',
        ]);
        $user = DB::table('user')->where('username',$request->email)
        ->where('password', $request->password)
        ->get();
        
        if(count($user)>0){
            session()->put('user', $request->email);
            return redirect('/dashboard');
        }else{
            return redirect()->back();
        }
    }
    public function logout(Request $request)
    {
       session()->forget('user');
       return redirect('/admin');
    }
}
