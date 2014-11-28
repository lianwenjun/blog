<?php

class Category extends \Eloquent {

    protected $table = 'category';
    protected $guarded = array('id', 'account_id');
    /**
     * 文章列表查询
     **/
    public function lists()
    {
        $datas = Category::orderBy('id', 'desc')->get();
        //文章数量查询
        foreach($datas as $key=>$v){
            $id = $v['id'];
            $v['count'] = Articles::where('cat_id', $id)->count();
            $datass[] = $v;
        }
        return $datass;  
    }
    /*
    public function getOne($id)
    {
        $datas = DB::table($this->table)->where('id', $id)->first();
        return $datas;  
    }
    */
    /**
     * 分类添加
     **/
    public function insert($data)
    {
        $id = Category::create($data);
        return $id;
    }

    /**
     * 文章列表删除
     **/
    public function del($id)
    {
        return Category::where('id', '=', $id)->delete();
    }



    
    

}