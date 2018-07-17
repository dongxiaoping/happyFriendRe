<?php
// +----------------------------------------------------------------------
// | Copyright (php), BestTV.
// +----------------------------------------------------------------------
// | Author: karl.dong
// +----------------------------------------------------------------------
// | Date：2018/7/16
// +----------------------------------------------------------------------
// | Description: 
// +----------------------------------------------------------------------

namespace app\controller;
use Qiniu\Auth;
class Pic
{
    public function __construct() {
        // 用于签名的公钥和私钥
        $this->accessKey = 'u3P6msYgAMx7oM3BD8di_HSIq29-LUUmlwsCtPWd';
        $this->secretKey = 'JC7q_j7J42L_6gnYqika1pZmaiX5pXymhwHjnf6K';
        // 要转码的文件所在的空间
        $this->bucket = 'images';
    }

    //http://39.108.181.67:8080/happyFriendRe/happy_friend_server/public/index.php?s=pic&test
    public  function test(){
        header('Access-Control-Allow-Origin:*');
        $policy = array(
            'returnUrl' => 'http://39.108.181.67:8083/happyFriendRe/test/fileinfo.php',
            'returnBody' => '{"fname": $(fname)}',
        );
        // 初始化签权对象
        $auth = new Auth($this->accessKey, $this->secretKey);
        $upToken = $auth->uploadToken($this->bucket, null, 3600, $policy);
       // $upToken = $auth->uploadToken($this->bucket);
        echo $upToken;
    }
}