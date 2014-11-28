@extends('admin.layout')

 <!--内容开始-->
 @section('content')
        <div class="content">
            <div class="tab">
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                    <tr class="Search_biao_title">
                        <td width="10%">序号</td>
                        <td width="20%">文章类别</td>
                        <td width="30%">文章标题</td>
                          <td width="15%">评论总数</td>
                          <td width="15%">添加时间</td>
                        <td width="10%">操作</td>
                    </tr>
                    @forelse($lists as $data)
                    <tr class="jq-tr Search_biao_one">
                        <td>{{ $data->id }}</td>
                        <td>@if(empty($data->cat_name))未分类 @else{{$data->cat_name}}@endif</td>
                        <td>{{$data->title}}</td>
                        <td>{{$data->com_count}}</td>
                        <td>@if(isset($data->updated_at)) {{ $data->updated_at }} @else {{$data->created_at}} @endif</td>
                        <td>
                            <a class="Search_show"  href="{{ URL::route('article.update', $data->id) }}">编辑</a>
                            <a class="Search_del jq-delete" href="{{ URL::route('article.del', $data->id) }}">删除</a>
                        </td>
                    </tr>
                    @empty
                    <tr class="no-data">
                        <td colspan="6">暂时还没有数据</td>
                    </tr>
      
                    @endforelse
                </tbody>
            </table>
            </div>  
        </div>
        <!--内容结束-->
@stop