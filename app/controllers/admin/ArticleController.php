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