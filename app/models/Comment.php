<?php

class Comment extends \Eloquent {

    protected $table = 'comments';
    
    /**
     * 评论列表查询
     **/
    public function lists()
    {
        $datas = Comment::orderBy('id', 'desc')->get();
        //文章title
        foreach($datas as $key=>$v){
            $art_id = $v['art_id'];
            $v['art_title'] = Articles::find($art_id )['title'];
            $datas[] = $v;
        }
        return $datas;  
    }
    
    /**
     * 评论删除
     **/
    public function del($id)
    {
        return Comment::where('id', '=', $id)->delete();
    }
    
    

}