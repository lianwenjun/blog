<?php

class Log extends \Eloquent {
    protected $table = 'logs';
    protected $guarded = array('id', 'account_id');

    /**
    * 日志创建
    * @param $data  array 插入数据
    */
    public function creatLog($data) {
        $query = Log::create($data);
    }

    /**
    * 日志列表
    * @return 返回结果$datas 
    */
    public function lists() {
        $query = Log::all();
        $datas = $query;
        return $datas;
    }

} 