<?php

class PhotoController extends BaseController {
    public function index()
    {
        //创建一个excel文件
        Excel::create('abc');
        $this->layout->content = View::make('admin.photo');
         
    }
    
    
}