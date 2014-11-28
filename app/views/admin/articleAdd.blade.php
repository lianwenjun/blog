@extends('admin.layout')

 <!--内容开始-->
 @section('content')
        <div class="content">
            <div class="tab">
            {{ Form::open(array('url' => 'admin/article/addArticle')) }}
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
         <tbody>
              <tr class="Search_biao_two">
                
               <td width="101" class="Search_lei">
                    文章分类
               </td>
               <td>
                  <select class="Search_select" name="cat_id">
                     <option value="">请选择</option>
                      @forelse($cat_lists as $data)
                     <option value="{{$data->id}}">{{ $data->cat_name }}</option>
                     @empty
                     @endforelse
                  </select>
                  
               </td>
            </tr>
            <tr class="Search_biao_one">

               <td width="101" class="Search_lei">
                    文章标题
               </td>
               <td width="1489"><input type="text" name="title"></td>
            </tr>
        
            
            <tr class="Search_biao_two">
               <td class="Search_lei"><span class="required">*</span>文章内容</td>
               <td>
                    <textarea style="height: 231px; width: 1479px;" name="content"></textarea>
               </td>
            </tr>
            
            <tr class="Search_biao_one">
                <td align="center" class="Search_submit" colspan="2">
                    <input type="submit" class="Search_en jq-submitAdd" value="添加">
                    <a target="BoardRight" href="http://localhost:8080/admin/apps/draft">返回列表</a>
                </td>
            </tr>
         </tbody>
      </table>
      {{ Form::close() }}
            </div>  
        </div>
        <!--内容结束-->
@stop