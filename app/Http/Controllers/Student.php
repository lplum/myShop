<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Tools\Tools;
use DB;
class Student extends Controller
{
    public $tools;
    public function __construct(Tools $tools)
    {
        $this->tools=$tools;
    }

    public function add()
    {
//        $redis=new \Redis();
//        $redis->connect('127.0.0.1','6379');
//        $num=$redis->get('num');
//        echo  $num."<br/>";
        return view('studentadd');
    }
    public function save(Request $request)
    {
        $data=$request->except(['_token']);
        $res=DB::table('student')->insert($data);
        if($res){
            return redirect('/student/index');
        }
    }
    public function index()
    {
//        $redis=$this->tools->getRedis();
//        $redis->incr('num');
        $stu=DB::table('student')->paginate(1);
        return view('studentindex',['data'=>$stu]);
    }
    public function del($id)
    {
        $re=DB::table('student')->where('id','=',$id)->delete();
        if($re){
            return redirect('/student/index');
        }
    }
    public function edit($id)
    {
        $re=DB::table('student')->where('id','=',$id)->first();
        return view('studentedit',['data'=>$re]);
    }
    public function update(Request $request)
    {
        $id=$request->id;
        $data=$request->except(['_token','id']);
        $res=DB::table('student')->where(['id'=>$id])->update($data);
        if($res){
            return redirect('/student/index');
        }
    }
}
