<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index()
    {
        echo "你好";
        return view('welcome');
    }
}
