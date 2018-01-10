<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_Controller extends Smarty_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	function index(){
		$this->output->enable_profiler(TRUE);
		$this->smarty->display('index.html');
	}

}
