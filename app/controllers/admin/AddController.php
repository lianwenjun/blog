<?php



class AddController extends BaseController {

    /**
    * GET /add/index 添加文章
    * @return Response
    */
    public function index()
    {
         $model_Cat = new Category();
         $cat_lists = $model_Cat->lists();
         $this->layout->content = View::make('admin.articleAdd')->with('cat_lists',$cat_lists);  
    }

    /**
    * GET /add/articleAdd  提交文章
    * @return Response
    */
    public function addArticle()
    {
        $model = new Articles();
        $data = ['cat_id' => Input::get('cat_id'), 'title' => Input::get('title'), 'content' => Input::get('content')];
        
         if(empty($data['cat_id'])){
            return "<script>alert('文章分类不能为空');window.history.back()</script>";
        }else if(empty($data['title'])){
            return "<script>alert('文章标题 不能为空');window.history.back()</script>";
        }else if(empty($data['content'])){
            return "<script>alert('文章内容不能为空');window.history.back()</script>";
        }else{
            $model->insert($data);
        }
        return Redirect::route('article.index');
    }


    
}
