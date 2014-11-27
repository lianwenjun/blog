<html>
<title>欢迎光临我的博客</title>
<style>
	a{ text-decoration: none}
	*{margin:0;padding: 0}
	ul,li{list-style-type: none}
	.header{ margin:0 auto 10px;height:40px;border-bottom: 1px solid #bbb;line-height: 40px}
	.header h4{float: right;}
	.main{ margin:0 auto;}
	.menu{width:10%;float:left;min-height:500px;border-right:1px solid #bbb	; padding: 0 10px; }
	.menu .m_title{height:30px; line-height: 30px; text-align: right;padding:0 10px 0 0; margin-bottom:5px;border-radius: 5px; border: 1px solid #f90}
	.menu ul li{ height:20px;line-height: 20px;text-align: right;padding: 5px 10px 5px 0; }
	.content{width:87%;float:left;min-height:500px;margin:10px 0 0 20px;overflow: auto;}
	.content .tab{}

.Search_biao_one {
    background: none repeat scroll 0 0 #e2e2e2;
    color: #333;
    cursor: pointer;
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
				<li><a href="#">文章列表</a></li>
				<li><a href="#">添加文章</a></li>	
			</ul>
			<div class="m_title">类别管理</div>	
			<ul>
				<li><a href="#">类别列表</a></li>
			</ul>
			<div class="m_title">评论管理</div>	
			<ul>
				<li><a href="#">评论列表</a></li>
			</ul>
		</div>
		<!--菜单结束-->

		<!--内容开始-->
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
				<tr class="jq-tr Search_biao_one">
					<td>18</td>
					<td>admin</td>
					<td>编辑了屏蔽词 屏蔽词ID为1</td>
					<td>18</td>
					<td>2014-8-2 14:25:25</td>
					<td>
						<a class="Search_show" target="BoardRight" href="http://localhost:8080/admin/apps/draft/1">编辑</a>
						<a class="Search_del jq-delete" href="http://localhost:8080/admin/apps/1">删除</a>
					</td>
				</tr>
             <tr class="jq-tr Search_biao_two">
					<td>18</td>
					<td>admin</td>
				
					<td>编辑了屏蔽词 屏蔽词ID为1</td>
					<td>18</td>
					<td>2014-8-2 14:25:25</td>
					<td>
						<a class="Search_show" target="BoardRight" href="http://localhost:8080/admin/apps/draft/1">编辑</a>
						<a class="Search_del jq-delete" href="http://localhost:8080/admin/apps/1">删除</a>
					</td>
				</tr>
				<tr class="jq-tr Search_biao_one">
					<td>18</td>
					<td>admin</td>
					
					
					<td>编辑了屏蔽词 屏蔽词ID为1</td>
					<td>18</td>
					<td>2014-8-2 14:25:25</td>
					<td>
						<a class="Search_show" target="BoardRight" href="http://localhost:8080/admin/apps/draft/1">编辑</a>
						<a class="Search_del jq-delete" href="http://localhost:8080/admin/apps/1">删除</a>
					</td>
				</tr>      
                    </tbody></table>
			</div>	
		</div>
		<!--内容结束-->
	</div>
</body>
</html>