<?php

namespace app\controllers;
use app\models\Users;

class UsersController extends \lithium\action\Controller {

	public function index(){
		$users = Users::all();
		return compact('users');
	}

}

?>