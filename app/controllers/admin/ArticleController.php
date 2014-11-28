<?php



class ArticleController extends BaseController {

    /**
    * GET /login/signin
    * @return Response
    */
    public function index()
    {
        $model = new Articles();
        $lists = $model->lists();
        $this->layout->content = View::make('admin.article')->with('lists', $lists);
    }

    /**
    * GET /add/index 添加文章
    * @return Response
    */
    public function addIndex()
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
        $data = ['title' => Input::get('title'), 'content' => Input::get('content'), 'cat_id' => Input::get('cat_id')];
        
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

    /**
    * GET /article/del/{id}
    *@param $id 文章ID
    *
    * @return Response
    */
    public function del($id)
    {
        $model = new Articles();
        $model->del($id);
        return Redirect::back();
    }

    /**
    * GET /article/update/{id}
    *@param $id 文章ID
    *
    * @return Response
    */
    public function update($id)
    {
        $model = new Articles();
        $datas = $model->getone($id);
        $model_cat = new Category();
        $cats = $model_cat->lists(); 
        $this->layout->content = View::make('admin.articleUpdate')
                                                        ->with('datas',$datas)
                                                        ->with('cats',$cats);
    }

    public function doUpdate()
    {
        $model = new Articles();
        $data = [
            'cat_id' => Input::get('cat_id'), 
            'title' => Input::get('title'), 
            'content' => Input::get('content')
        ];
        $id = Input::get('hid_id');
        $model->doUpdate($id, $data);
        return Redirect::route('article.index');
    }

}