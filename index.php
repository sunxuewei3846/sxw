<?php 


// // $controller = isset($_GET['c'])?ucfirst($_GET['c']):'User';
// // $action = isset($_GET['a'])?$_GET['a']:'login';

// // $config = include('./config.php');
// include ('./function.php');
// // include ('./DB.php');

// use Controller\Home\User;

// // $controller = 'Controller\Home\\'.$controller;
// // print_r($controller);die;
// $obj = new User();
// // print_r($obj);die;
// $obj->login();







header("content-type:text/html;charset=utf8");

define('APP_HOST', $_SERVER['HTTP_HOST']);

$controller = isset($_GET['c'])?ucfirst($_GET['c']):'User';
$action = isset($_GET['a'])?$_GET['a']:'login';

$config = include('./config.php');
include ('./function.php');
include ('./Controller/controller.php');
// include ('./DB.php');

$controller = 'Controller\Home\\'.$controller;
// print_r($controller);die;
$obj = new $controller();

$obj->$action();