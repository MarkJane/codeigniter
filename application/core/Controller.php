<?php if (!defined('BASEPATH')) exit('No direct access allowed.');

class Controller extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        ENVIRONMENT!=='development'?:$this->output->enable_profiler(TRUE);
    }

    public function __destruct()
    {
        ENVIRONMENT==='development'?:exit;
    }

	/**
     * 接口返回总控
     * @param  string  $message     [字符串信息]
     * @param  integer $status_code [状态码 200正常 404无数据 500服务器异常 302暂时性转移 301永久重定向]
     * @return [type]               [生产环境使用exit，调试环境使用echo。]
     */
    protected function message($message='',$status_code=500)
    {
        echo(json_encode(['message'=>$message,'status_code'=>$status_code,'status'=>TRUE]));
    }
    
    protected function success($message='')
    {
        echo(json_encode(['message'=>$message,'status_code'=>200,'status'=>FALSE]));
    }

    protected function notice($message='', $status_code='', $heading = 'An Error Was Encountered')
    {
        show_error($message, $status_code, $heading);
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
            $this->message('Bad request!');
        }
    }

    public function __destruct()
    {
        ENVIRONMENT==='development'?:exit;
    }
} 

