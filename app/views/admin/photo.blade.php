@extends('admin.layout')

 <!--内容开始-->
 @section('content')
 <form action="upload/" enctype="multipart/form-data" method="post">
 	<input type="file" name="files"/>
 	<input type="submit" value="shangchuan" />
 </form>
 @stop