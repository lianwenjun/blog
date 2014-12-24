
@extends('admin.layout')

<!--内容开始-->
@section('content')
<script src="{{ asset('js/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/plupload/plupload.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/admin/plupload/i18n/zh_CN.js') }}" type="text/javascript"></script>
<h3>HTML 5 runtime</h3>
<div id="html5_uploader">Your browser doesn't support native upload.</div>
<script>
$("#html5_uploader").pluploadQueue({
        // General settings
        runtimes : 'html5',
        url : "/examples/upload",
        chunk_size : '1mb',
        unique_names : true,
         
        filters : {
            max_file_size : '10mb',
            mime_types: [
                {title : "Image files", extensions : "jpg,gif,png"},
                {title : "Zip files", extensions : "zip"}
            ]
        },
 
        // Resize images on clientside if we can
        resize : {width : 320, height : 240, quality : 90}
    });
</script>
@stop