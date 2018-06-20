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
		$this->display('User/index');
	}

	public function Dried_food()//干货
	{
		// print_r(1);die;
		$this->display('User/Dried_food');
	}
	public function Paragraph()//段子
	{
		// print_r(1);die;
		$this->display('User/Paragraph');
	}
	public function About_us()//关于我们
	{
		// print_r(1);die;
		$this->display('User/About_us');
	}
	public function Details_page()//详情页
	{
		// print_r(1);die;
		$this->display('User/Details_page');
	}
	public function search_result()//搜索结果
	{
		// print_r(1);die;
		$this->display('User/search_result');
	}
}