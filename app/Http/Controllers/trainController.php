<?php

namespace App\Http\Controllers;
use App\Http\Tools\Tools;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use DB;
class trainController extends Controller
{
	public $tools;
    public function __construct(Tools $tools)
    {
        $this->tools=$tools;
    }
    public function index(Request $request)
    {
    	$redis=$this->tools->getRedis();
        $num=$redis->incr('num');
        echo "浏览了".$num."次";
    	$req =$request->all();
        if (isset($req['cha'])){
            $res=DB::table('train')->where('car','like','%'.$req['cha'].'%')->paginate(1);
        }else{
            $req['cha']="";
            $res=DB::table('train')->paginate(1);
        }
    	return view('train',['data'=>$res,'car'=>$req['cha']]);
    }
    public function yuding(Request $request)
    {
    	$data=$request->except(['_token']);
    	dd($data);
    }
}
