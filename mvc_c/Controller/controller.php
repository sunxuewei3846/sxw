<?php 

namespace Controller;

/**
* 
*/
class Controller
{
	public $assign;
	public function display($action)
	{
		@extract($this->assign);
		include './view/'.$action.'.html';
	}

	public function assign($key,$value)
	{
		$this->assign[$key] = $value;
	}
}