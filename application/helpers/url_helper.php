<?php if (!defined('BASEPATH')) exit('No direct access allowed.');
	
	/**
	 * 系统主题文件路径定义
	 * @param  string $uri      [文件相对路径]
	 * @param  [type] $protocol [description]
	 * @return [type]           [description]
	 */
	function file_url($uri = '', $protocol = NULL)
	{
		$file_url = base_url('static/');
		if (isset($protocol))
		{
			$file_url = $protocol.substr($file_url, strpos($file_url, '://'));
		}
		return $file_url.ltrim($uri, '/');
	}

	/**
     * 接口返回总控
     * @param  string  $message     [字符串信息]
     * @param  integer $status_code [状态码 200正常 404无数据 500服务器异常 302暂时性转移 301永久重定向]
     * @return [json_encode]
     */
	function message($message='',$status_code=500)
	{
		die(json_encode(['msg'=>$message,'code'=>$status_code,'status'=>TRUE]));
	}

	function success($message='')
	{
		die(json_encode(['msg'=>$message,'code'=>200,'status'=>FALSE]));
	}

	function notice($message='', $status_code='', $heading = 'An Error Was Encountered')
	{
		show_error($message, $status_code, $heading);
	}