<?php if (!defined('BASEPATH')) exit('No direct access allowed.');

function file_url($uri = '', $protocol = NULL)
{
	$file_url = base_url('static/');
	if (isset($protocol))
	{
		$file_url = $protocol.substr($file_url, strpos($file_url, '://'));
	}
	return $file_url.ltrim($uri, '/');
}
