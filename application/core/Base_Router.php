<?php if (!defined('BASEPATH')) exit('No direct access allowed.');

class Base_Router extends CI_Router {

    public $controller_suffix = '_Controller';

    public function __construct(){
        parent::__construct();
    }

}