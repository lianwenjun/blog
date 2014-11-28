@extends('admin.layout')

 <!--内容开始-->
 @section('content')
        <div class="content">
            <div class="tab">
                <table width="100%" cellspacing="0" cellpadding="0" border="0">
                {{ Form::open(array('url' => 'admin/article/doUpdate')) }}
                    <tbody>
                        <tr class="Search_biao_two">
                            <td width="101" class="Search_lei">
                                文章分类
                            </td>
                            <td>
                              <select class="Search_select" name="cat_id">
                                 @foreach($cats as $lists)
                                 <option value="{{ $lists->id }}" @if($datas->cat_id == $lists->id) selected @endif>{{ $lists->cat_name }}</option>
                                 @endforeach
                              </select>               
                            </td>
                        </tr>
                        <tr class="Search_biao_one">
                           <td width="101" class="Search_lei">
                                文章标题
                           </td>
                           <td width="1489"><input type="text" name="title" value="{{ $datas->title}}"></td>
                        </tr>
                        <tr class="Search_biao_two">
                           <td class="Search_lei"><span class="required">*</span>文章内容</td>
                           <td>
                                <textarea style="height: 231px; width: 1479px;" name="content">{{ $datas->content}}</textarea>
                           </td>
                        </tr>
                        <tr class="Search_biao_one">
                            <td align="center" class="Search_submit" colspan="2">
                            <input type="hidden" name="hid_id" value="{{ $datas->id}}">
                                <input type="submit" value="更新" class="Search_en jq-submitAdd">
                                <a href="{{ URL::route('article.index') }}">返回列表</a>
                            </td>
                        </tr>
                    </tbody>
                    {{ Form::close() }}
                </table>
            </div>  
        </div>
        <!--内容结束-->
@stop