<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Login extends Controller
{
   public function register()
   {
       return view('register');
   }
    public function doregister(Request $request)
    {
        $data=$request->except(['_token']);

        $res=DB::table('user')->insert($data);
        if ($res){
            return redirect('/login/login');
        }
    }
    public function login()
    {
        return view('login');
    }
    public function dologin(Request $request)
    {
        $user = request()->user;
        $pwd = request()->pwd;
        $res = DB::table('user')->where('user', $user)->where('pwd', $pwd)->first();
        if ($res) {
            return (['code' => 1]);
        } else {
            return (['code' => 2]);
        }
    }
}
