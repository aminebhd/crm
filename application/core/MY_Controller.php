<?php

class My_Controller extends CI_Controller{

	public $data = array('pageTitle' => 'Almokawil');
	public $user_id = null;

	public function __construct(){
		parent::__construct();
		// get current method name, than open the view
		$this->data['site_url'] = base_url();
		$this->data['page']  = $this->router->fetch_class().'/';
		$this->data['page'] .= $this->router->fetch_method();
		// check if user is logged in, otherwise we do a resirect to the login page
		$session = $this->session->userdata('is_logged_in');
		if(!isset($session) || $session != true)
			redirect('login');
		else
			$this->user_id = $session;
	}

	// Add a new form validation rule on, to validate French Date  {callback_valid_date}
	public function valid_date($date){
		if(preg_match('/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/', $date, $matches)){
			$matches = explode('/', $matches[0]);
			if(($matches[0] >= 1 && $matches[0] <= 31) && ($matches[1] >= 1 && $matches[1] <= 12))
				return true;
		}
	}

	//
	public function in_db($value, $table){

	}


}

?>
