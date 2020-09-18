<?php

namespace App\Models\Auth;

use Yahmi\Auth\AuthManager as BaseAuthManager;
use App\Models\Auth\User;
use stdClass;

class AuthManager extends BaseAuthManager
{

		public function __construct()
		{
			parent::__construct();
     	}
		/**
	 * Perform authentication based on credential supplied
	 * if user found set User object in session or as of now simply set user_id in session
	 * @param  string $user_id   
	 * @param  string $password  
	 * @return boolean           
	 */
	public function performAuth($user_id,$password)
	{
		$app_name = config('app.app_dir');

		$auth_sql = 'SELECT id, first_name, last_name, email, password, member_role_id FROM members WHERE 
					 email=:user_id';
		$user = $this->executeSQL($auth_sql,['user_id' => $user_id],true);
		if(!is_null($user) || !empty($user))
		{
			if (password_verify($password, $user['password'])) 
			{
				//User is successfully logged in all auth params are right
				//store user object inside session
				
				// prepare user object
				$this->user = new stdClass();
				$this->user->id  =  $user['id'];
				$this->user->firstName = $user['first_name'];
				$this->user->lastName = $user['last_name'];
				$this->user->userId= $user['email'];
				$this->user->password = $user['password'];
				$this->user->userRoleId = $user['member_role_id'];

				//store user object
				$this->sessionManager->store('logged_in_user',$this->user);
				$this->sessionManager->store('app_name',$app_name);
				return true;
			}else{
				return false;
			}
		}
		return false;			 
	}

	/**
	 * fetch logged in user object from session object
	 * @return User
	 */
	public function getLoggedInUser()
	{	
		$logged_in_user_obj = (array) $this->sessionManager->get('logged_in_user');
		$logged_in_user = new User($logged_in_user_obj);
		return $logged_in_user;
	}
}