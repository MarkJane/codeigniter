<?php if (!defined('BASEPATH')) exit('No direct access allowed.');

class Base_Service
{

	function __get($key)
    {
        $CI = & get_instance();
        return $CI->$key;
    }
} 


