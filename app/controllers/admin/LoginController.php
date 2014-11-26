<?php



class LoginController extends BaseController {

	/**
	* GET /login/signin
	* @return Response
	*/
	public function index()
	{
		
		return  View::make('admin.login');

	}

	/**
	 * 管理员登陆
	 * PUT /login/doSignin
	 * 
	 * @return Response
	 */
	public function check()
    	{
		
	    	return Redirect::route('users.index');
   	 }
   	

}
