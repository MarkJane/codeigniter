<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Smarty_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	function index(){
		$this->smarty->display('index.html');
	}

}
