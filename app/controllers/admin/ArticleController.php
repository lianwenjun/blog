<?php



class ArticleController extends BaseController {

    /**
    * GET /login/signin
    * @return Response
    */
    public function index()
    {
        return  View::make('admin.article');
    }
}