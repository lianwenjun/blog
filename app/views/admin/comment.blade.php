@extends('admin.layout')

 <!--内容开始-->
 @section('content')
        <div class="content">
            <div class="tab">

            <div class="Theme_Search">
                <ul>
                    <li>
                    {{ Form::open(array('url' => 'admin/category/add')) }}
                        <span><b>文章标题：</b>
                        
                        <input type="text" placeholder="请输入文章标题" value="" size="20" class="Search_wenben" maxlength="20" name="addCat"></span>
                       
                        <input type="submit" class="Search_en jq-submitAdd" value="添加">
                        {{ Form::close() }}
                    </li>
                   
                </ul>
            </div>

            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr class="Search_biao_title">
                        <td width="10%">序号</td>
                        <td width="20%">文章标题</td>
                        <td width="30%">评论内容</td>
                        <td width="10%">评论用户</td>
                        <td width="15%">添加时间</td>
                        <td width="10%">操作</td>
                    </tr>
                  @foreach($lists as $data)
                    <tr class="jq-tr Search_biao_one">
                        <td>{{ $data->id}}</td>
                        <td>{{ $data->art_title}}</td>
                        <td>{{ $data->content}}</td>
                        <td>@if( $data->user_id == 0) 匿名 @endif</td>
                        <td>{{ $data->created_at}}</td>
                        <td>
                            <a class="Search_del jq-delete" href="{{ URL::route('comment.del', $data->id) }}">删除</a>
                        </td>
                    </tr>
                    @if(empty($lists))
                    <tr class="no-data">
                        <td colspan="6">暂时还没有数据</td>
                    </tr>
                    @endif
                    @endforeach
                   
                </tbody>
            </table>
            </div>  
        </div>
        <!--内容结束-->
@stop