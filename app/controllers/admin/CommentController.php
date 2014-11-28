<?php



class CommentController extends BaseController {

    /**
    * GET /login/signin
    * @return Response
    */
    public function index()
    {
        $model = new Comment();
        $lists = $model->lists();
        $this->layout->content = View::make('admin.comment')->with('lists', $lists);
    }

    /**
    * GET /category/del/{id}
    *@param $id 分类ID
    *
    * @return Response
    */
    public function del($id)
    {
        $model = new Comment();
        $model->del($id);
        return Redirect::back();
    }

}