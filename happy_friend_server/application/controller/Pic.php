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
use Qiniu\Storage\UploadManager;

class Pic
{
    public function __construct() {
        // 用于签名的公钥和私钥
        $this->accessKey = 'u3P6msYgAMx7oM3BD8di_HSIq29-LUUmlwsCtPWd';
        $this->secretKey = 'JC7q_j7J42L_6gnYqika1pZmaiX5pXymhwHjnf6K';
        // 要转码的文件所在的空间
        $this->bucket = 'images';
    }

    //http://39.108.181.67:8080/happyFriendRe/happy_friend_server/public/index.php?s=/pic/mmmm
    //m=api c=index a=indextest
    public  function test(){
       // $c = think.const.APP_PATH;
/*        header('Access-Control-Allow-Origin:*');
        $policy = array(
            'returnUrl' => 'http://39.108.181.67:8080/happyFriendRe/test/fileinfo.php',
            'returnBody' => '{"fname": $(fname)}',
        );
        // 初始化签权对象
        $auth = new Auth($this->accessKey, $this->secretKey);
        $upToken = $auth->uploadToken($this->bucket, null, 3600, $policy);
       // $upToken = $auth->uploadToken($this->bucket);
        echo $upToken;*/
        echo APP_PATH.'\image\cc.jpg';

/*        header('Access-Control-Allow-Origin:*');
        // 构建鉴权对象
        $auth = new Auth($this->accessKey, $this->secretKey);
        // 生成上传 Token
        $token = $auth->uploadToken($this->bucket);
        // 要上传文件的本地路径
        $filePath = __DIR__.'\image\cc.jpg';
        // 上传到七牛后保存的文件名
        $key = 'my-php-logo.jpg';
        // 初始化 UploadManager 对象并进行文件的上传。
        $uploadMgr = new UploadManager();
        // 调用 UploadManager 的 putFile 方法进行文件的上传。
        list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
        echo "\n====> putFile result: \n";
        if ($err !== null) {
            var_dump($err);
        } else {
            var_dump($ret);
        }*/
    }

    //http://39.108.181.67:8080/happyFriendRe/happy_friend_server/public/index.php?s=/pic/pic_upload
    public function pic_upload(){
        header('Access-Control-Allow-Origin:*');
        // 构建鉴权对象
        $auth = new Auth($this->accessKey, $this->secretKey);
        // 生成上传 Token
        $token = $auth->uploadToken($this->bucket);
        // 要上传文件的本地路径
        $filePath = APP_PATH.'\image\cc.jpg';
        // 上传到七牛后保存的文件名
        $key = 'my-php-logo.jpg';
        // 初始化 UploadManager 对象并进行文件的上传。
        $uploadMgr = new UploadManager();
        // 调用 UploadManager 的 putFile 方法进行文件的上传。
        list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
        echo "\n====> putFile result: \n";
        if ($err !== null) {
            var_dump($err);
        } else {
            var_dump($ret);
        }
    }
}