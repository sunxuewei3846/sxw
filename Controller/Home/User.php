<?php 
// print_r(111111111);die;

namespace Controller\Home;

Use Controller\Controller;
use Model\DB;

class User extends Controller
{
	public function login()
	{
		// echo url('message','delete',['id'=>12]);die;
		// $db = new DB();
		// $this->display('User/login');
		// $user = [
		// 	'id' => 1,
		// 	'name'=>'张三'
		// ];
		// $this->assign('user',$user);
		// $this->assign('is_rich','不是');
		$this->display('User/login');
	}

	public function index()//干货
	{
		// print_r(1);die;
		$this->display('User/index');
	}
}