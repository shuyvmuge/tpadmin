<?php
// +----------------------------------------------------------------------
// | tpadmin [a web admin based ThinkPHP5]
// +----------------------------------------------------------------------
// | Copyright (c) 2016 tianpian
// +----------------------------------------------------------------------
// | Author: tianpian <tianpian0805@gmail.com>
// +----------------------------------------------------------------------

//------------------------
// 分组模型
//-------------------------

namespace app\admin\model;
use think\Model;

class AdminGroup extends Model{
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
}