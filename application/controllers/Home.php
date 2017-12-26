<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_Controller extends Base_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	function index(){
		$this->load->view('index.html');
	}

}
