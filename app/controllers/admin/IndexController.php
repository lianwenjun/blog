<?php



class IndexController extends BaseController {

	/**
	* GET /login/signin
	* @return Response
	*/
	public function signin()
	{
		return  View::make('admin.login');
	}

	/**
	 * 管理员登陆
	 * PUT /login/doSignin
	 * 
	 * @return Response
	 */
	public function doSignin()
    	{
		try {
		    $credentials = [
		        'username' => Input::get('username'),
		        'password' => Input::get('password'),
		    ];
		    $user = Sentry::authenticate($credentials, false);

		    return Redirect::route('admin.index');
		} catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
		    Session::flash('tips', ['success' => false, 'message' => "用户名必填"]);
		} catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
		    Session::flash('tips', ['success' => false, 'message' => "密码必填"]);
		} catch (Cartalyst\Sentry\Users\WrongPasswordException $e) {
		    Session::flash('tips', ['success' => false, 'message' => "用户名密码不正确"]);
		} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
		    Session::flash('tips', ['success' => false, 'message' => "用户不存在"]);
		} catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
		    Session::flash('tips', ['success' => false, 'message' => "用户未激活"]);
		} catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e) {
		    Session::flash('tips', ['success' => false, 'message' => "用户已挂起"]);
		} catch (Cartalyst\Sentry\Throttling\UserBannedException $e) {
		    Session::flash('tips', ['success' => false, 'message' => "用户已冻结"]);
		}

	    	return Redirect::route('users.signin');
   	 }

}
