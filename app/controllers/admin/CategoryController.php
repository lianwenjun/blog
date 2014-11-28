<?php



class CategoryController extends BaseController {

    /**
    * GET /category/index
    * @return Response
    */
    public function index()
    {
        $model = new Category();
        $lists = $model->lists();
        $this->layout->content = View::make('admin.category')->with('lists',$lists);
    }

    /**
    * GET /category/add
    * @return Response
    */
    public function add()
    {
        $model = new Category();
        $data = ['cat_name' => Input::get('addCat')];
        if(!is_null($data)){
            $model->insert($data);
        }
        return Redirect::back();
    }
    
    /**
    * GET /category/del/{id}
    *@param $id 分类ID
    *
    * @return Response
    */
    public function del($id)
    {
        $model = new Category();
        $model->del($id);
        return Redirect::back();
    }

    

}
