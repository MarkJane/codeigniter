<?php if (!defined('BASEPATH')) exit('No direct access allowed.');

class Controller extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        ENVIRONMENT!=='development'?:$this->output->enable_profiler(TRUE);
    }

} 

class Smarty_Controller extends Controller {

    protected $smarty;
    public function __construct() {
        parent::__construct();
        $this->smarty = new \Smarty;
        $this->smarty->left_delimiter = '{{';
        $this->smarty->right_delimiter = '}}';
        $this->smarty->setTemplateDir(VIEWPATH);
        $this->smarty->setCompileDir(FCPATH . 'temp');
        $this->smarty->setConfigDir(APPPATH . 'config');
        $this->smarty->setCacheDir(FCPATH . 'cache');
        $this->smarty->force_compile = ENVIRONMENT==='development'?TRUE:FALSE;
        $this->smarty->caching        = ENVIRONMENT==='development'?FALSE:TRUE;
        $this->smarty->cache_lifetime = ENVIRONMENT==='development'?0:60;
        $this->smarty->assign('config',config_item('config'));  
    }

    public function __destruct()
    {
        unset($this->smarty);
    }

} 

class Ajax_Controller extends Controller {
    
    public function __construct() {
        parent::__construct();
        if(!$this->input->is_ajax_request()){
            return message('Bad request!');
        }
    }

} 

