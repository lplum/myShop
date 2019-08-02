<?php

namespace App\Http\Controllers\Index;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
    public function register()
    {
    	 return view('index.register');
    }
    public function doregister(Request $request)
    {
    	$data = $request->except(['_token']);
    	$res=DB::table('usr')->insert($data);
    	if ($res) {
    		return redirect('/index/login');
    	}
    }
    public function login()
    {
         return view('index.login');
    }
    public function dologin(Request $request)
    {
        $req = $request->except(['_token']);
        $data = DB::table('usr')->where('user',$req['user'])->where('pwd',$req['pwd'])->first();
        if(!empty($data)){
            session(['user'=>$req['user']]);
            return redirect('/index/index');
        }else{
            echo "这是数据库里面没有查询到该用户";
        }
    }
}
