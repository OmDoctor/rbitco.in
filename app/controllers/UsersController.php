<?php
namespace app\controllers;
use app\models\Users;
use lithium\security\Auth;
use lithium\storage\Session;

class UsersController extends \lithium\action\Controller {

	public function index(){
		$users = Users::all();
		return compact('users');
	}
	public function signup() {	
		$user = Users::create();
			if(($this->request->data) && $user->save($this->request->data)) {	
			$this->redirect('Users::index');	
		}
			return compact(array('user'));
	}
	public function login() {	
		if(Auth::check('member', $this->request)) {
			return $this->redirect('Index::index');	
		}
	}
	public function logout() {	
		Auth::clear('member');
		return $this->redirect('Index::index');
	}
}

?>