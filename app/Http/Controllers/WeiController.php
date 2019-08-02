<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeiController extends Controller
{
    public function get_access_token()
    {
        $redis=new \Redis();
        $redis->connect('127.0.0.1','6379');
        $access_token_key='wechat_access_token';
        if ($redis->exists($access_token_key)){
            $access_token=$redis->get($access_token_key);
        }else{
            $access_re=file_get_contents('https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=APPID&secret=APPSECRET');
            $access_result=json_decode($access_re,1);
            $access_token=$access_result['access_token'];
            $expire_time=$access_result['expires_in'];
            $redis->set($access_token_key,$access_token,$expire_time);
        }
        return $access_token;
    }
}
