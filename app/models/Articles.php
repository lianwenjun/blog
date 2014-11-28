<?php

class Articles extends \Eloquent {

    protected $table = 'articles';
    protected $guarded = array('id', 'account_id');
    /**
     * 文章列表查询
     **/
    public function lists()
    {
        $datas = Articles::orderBy('id', 'desc')->get();
        //获取分类名称&评论总数
        foreach($datas as $key=>$v){
            $id = $v['cat_id'];
            $art_id = $v['id'];
            $v['cat_name'] = Category::find($id)['cat_name'];
            $v['com_count'] = Comment::where('art_id', $id)->count();
            $datass[] = $v;
        }

        return $datass;  
    }

    /**
     * 文章列表删除
     **/
    public function del($id)
    {
        return Articles::find($id)->delete();
    }

   /**
     * 文章插入
     **/
    public function insert($data)
    {
        $id = Articles::create($data);
        return $id;
    }
    
    /**
     * 获取单条文章
     **/
    public function getone($id)
    {
        $datas = Articles::find($id);
        return $datas;  
    }

    /**
     * 更新文章
     *@prame $data 文章数据
     *
     *@return $id 返回更新ID
     **/
    public function doUpdate($id, $data)
    {
        $update = Articles::find($id);
        $update->title = $data['title'];
        $update->content = $data['content'];
        $update->cat_id = $data['cat_id'];
        $update->save();
    }

}