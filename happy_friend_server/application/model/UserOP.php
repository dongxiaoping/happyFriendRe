<?php
// +----------------------------------------------------------------------
// | Copyright (php), BestTV.
// +----------------------------------------------------------------------
// | Author: karl.dong
// +----------------------------------------------------------------------
// | Date：2018/6/28
// +----------------------------------------------------------------------
// | Description: 
// +----------------------------------------------------------------------

namespace app\model;
use \app\model\table;

class UserOP extends BaseOP{
    public function __construct() {
        $this->user = new table\User();
        parent::__construct($this->user);
    }

    public function get_user_info_by_wechat_id($wechat_id){
        $info =  $this->user->where("wechat_id",$wechat_id)->find();
        dump($info->tagRecords);
        return $info;
    }

}