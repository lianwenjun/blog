<?php



class UserController extends BaseController {

    /**
    * GET /User/login
    * @return Response
    */
    public function login()
    {
        return  View::make('admin.login');
    }

    /**
     * 管理员登陆
     * POST /User/check
     * @return Response
     */
    public function check()
    {
        $credentials = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];
        if (!Auth::attempt($credentials)) {
            Session::flash('tips', ['success' => false, 'message' => "账号密码不正确"]);   
        }else{
            return Redirect::route('article.index');
        }
            return Redirect::route('user.login');
        //return Redirect::route('login.index');
    }

    /**
     * 管理员登出
     * GET /User/logout
     * @return Response
     */
    public function logout()
    {
        Auth::logout();
        return Redirect::route('user.login');   
    }
    

}
