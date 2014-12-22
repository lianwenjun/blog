<?php
/*＊
*上传基类
*/
abstract class BaseUpload
{
    //上传处理
    abstract public function handel();
    //获得上传的文件目录
    abstract public function uploadPath();

}