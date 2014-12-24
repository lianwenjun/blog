<?php

class PhotoController extends BaseController {

    /**
    * 图片列表展示
    */
    public function index() {

        $this->layout->content = View::make('admin.photo');
    }

    /**
    * 图片上传方法
    *
    */
    public function imgUpload() {

        $uploader = Plupload::receive('file', function ($file)
        {
            $file->move(storage_path() . '/test/', $file->getClientOriginalName());

            return 'ready';
        });
    }
}