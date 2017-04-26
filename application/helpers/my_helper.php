<?php

function form_check($file_rules){

	$data = array('error' => false, 'message' => array());

	require_once('rules/'.$file_rules.'.php');
	$CI =& get_instance();
	$CI->form_validation->set_rules($config);
	$CI->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
	if($CI->form_validation->run()){
		$data['error'] = true;
	}else{
		foreach($_POST as $key => $value){
			$data['message'][$key] = form_error($key);
		}
	}
	return $data;
}


?>
