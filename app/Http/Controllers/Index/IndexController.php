<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    public function index()
    {
    	$data=DB::table('goods')->get()->toArray();
        return view('Index.index',['data'=>$data]);
    }
    
}
