<?php

namespace App\Http\Controllers;
use App\Http\Tools\Tools;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Storage;
use DB;
class GoodsController extends Controller
{
    public $tools;
    public function __construct(Tools $tools)
    {
        $this->tools=$tools;
    }
    public function index()
    {
        $redis=$this->tools->getRedis();
        $num=$redis->incr('num');
        echo "浏览了".$num."次";
        $data=DB::table('goods')->orderBy('create_time','desc')->paginate(5);
        return view('/goods/goodsindex',['data'=>$data]);
    }
    public function add()
    {
        return view('/goods/goodsadd');
    }
    public function save(Request $request)
    {
        $data = $request->except(['_token']);
        //dd($data);
        $data['create_time']=time();
        $url_path='upload/img';
        $file=$request->file('g_img');
        //获取上传文件的文件名含后缀
        $clientName = $file->getClientOriginalName();
        //获取上传到文件目录下的文件名
        $tmpName = $file->getFileName();
        //获取绝对路径
        $realPath = $file->getRealPath();
        //获取上传文件的后缀
        $entension = $file->getClientOriginalExtension();
        //将上传到目录后的文件名和后缀进行拼接
        $newName = md5(date("Y-m-d H:i:s") . $clientName) . "." . $entension;
        //移动文件
        $path = $file->move($url_path, $newName);
        $namePath = $url_path . '/' . $newName;
        $data['g_img']=$namePath;

        $res=DB::table('goods')->insert($data);
        if ($res){
            return redirect('/goods/index');
        }else{
            return error('/goods/add');
        }
    }
    public function del($g_id)
    {
        $re=DB::table('goods')->where('g_id','=',$g_id)->delete();
        if($re){
            return redirect('/goods/index');
        }
    }
    public function edit($g_id)
    {
        $re=DB::table('goods')->where('g_id','=',$g_id)->first();
        return view('/goods/goodsedit',['data'=>$re]);
    }
    public function update(Request $request)
    {
        $g_id=$request->g_id;
        $data=$request->except(['_token','g_id']);
        $res=DB::table('goods')->where(['g_id'=>$g_id])->update($data);
        if($res){
            return redirect('/goods/index');
        }
    }
}
