<html>
<title>欢迎光临我的博客后台管理系统</title>
<style>
    a{ text-decoration: none;color: #560;}
    a:hover{background: #f90;color: #fff}
    *{margin:0;padding: 0}
    ul,li{list-style-type: none}
    .header{ margin:0 auto 10px;height:40px;border-bottom: 1px solid #bbb;line-height: 40px}
    .header h4{float: right;}
    .main{ margin:0 auto;}
    .menu{width:10%;float:left;min-height:500px;border-right:1px solid #bbb ; padding: 0 10px; }
   
.menu .m_title {
    background: none repeat scroll 0 0 #1b4182;
    border-radius: 5px;
    color: #fff;
    height: 30px;
    line-height: 30px;
    margin-bottom: 5px;
    padding: 0 10px 0 0;
    text-align: right;
}
    .menu ul li{ height:20px;line-height: 20px;text-align: right;padding: 5px 10px 5px 0; }
    .content{width:87%;float:left;min-height:500px;margin:10px 0 0 20px;overflow: auto;}
    .content .tab{}

.Search_biao_one {
    background: none repeat scroll 0 0 #e2e2e2;
    color: #333;
    cursor: pointer;
}
.no-data {
    font-size: 14px;
    line-height: 40px;
    text-align: center;
}

.Search_biao_two {
    background: none repeat scroll 0 0 #f3f4f6;
    color: #333;
    cursor: pointer;
}
    .Search_biao_title td {
    background: none repeat scroll 0 0 #193974;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    height: 34px;
    line-height: 34px;
    padding-left: 10px;
}
    .Search_biao_one td {
    border-top: 1px solid #fff;
    font-size: 12px;
    padding: 7px 0 7px 10px;
}
.Search_biao td {
    padding-left: 10px;
}
.Search_biao_two td {
    border-top: 1px solid #fff;
    font-size: 12px;
    padding: 7px 0 7px 10px;
}
.Search_biao td {
    padding-left: 10px;
}

.Theme_Search {
    background: none repeat scroll 0 0 #fff;
    border: 1px solid #dedede;
    margin: 15px 0;
    overflow: hidden;
    position: relative;
}
.Theme_Search ul {
    background: none repeat scroll 0 0 #f6f6f6;
    margin: 1px;
    padding: 8px 15px;
}

.Theme_Search li {
    line-height: 24px;
    overflow: hidden;
    padding-bottom: 5px;
    padding-top: 8px;
}
.Theme_Search li span {
    display: inline-block;
    float: left;
    overflow: hidden;
    padding-right: 16px;
}

.Theme_Search li span b {
    display: inline-block;
    float: left;
    font-weight: normal;
    overflow: hidden;
}
.Theme_Search .Search_wenben {
    border: 1px solid #666;
    border-radius: 3px;
    float: left;
    font-family: "微软雅黑";
    height: 22px;
    line-height: 22px;
    margin-left: 5px;
    margin-top: 1px;
    padding-left: 3px;
    position: relative;
    z-index: 1;
}

.Theme_Search .Search_en {
    background: #1b4182;
    border: 1px solid #0e377d;
    border-radius: 3px;
    bottom: 4px;
    color: #fff;
    cursor: pointer;
    float: left;
    font-family: "微软雅黑";
    font-size: 14px;
    left: 5px;
    padding: 0 8px 1px;
    position: relative;
    z-index: 1;
}
.Theme_Search li input {
    color: #333;
    display: inline-block;
    float: left;
    font-size: 12px;
    margin-right: 3px;
    margin-top: 5px;
}
</style>
<body>

    <div class="header" >
        <h4 style="color:#f90">Hi！<?php echo Auth::user()->username ?><a href="<?php echo URL::route('user.logout');?>">登出后台</a></h4>
    </div>
    <div class="main">
        <!--菜单开始-->
        <div class="menu">
            <div class="m_title">文章管理</div> 
            <ul>
                <li><a href="{{ URL::route('article.index') }}">文章列表</a></li>
                <li><a href="{{ URL::route('article.addIndex') }}">添加文章</a></li>   
            </ul>
            <div class="m_title">类别管理</div> 
            <ul>
                <li><a href="{{ URL::route('category.index') }}">类别列表</a></li>
            </ul>
            <div class="m_title">评论管理</div> 
            <ul>
                <li><a href="{{ URL::route('comment.index') }}">评论列表</a></li>
            </ul>
            <div class="m_title">上传管理</div> 
            <ul>
                <li><a href="{{ URL::route('photo.index') }}">照片列表</a></li>
            </ul>
        </div>
    <!--菜单结束-->

        @yield('content')
    </div>
</body>
</html>