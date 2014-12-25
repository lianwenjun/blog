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