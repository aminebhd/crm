<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$login = $this->session->userdata('is_logged_in');
		if($login)
			redirect('/companies');
	}


	# Affiche la liste des société que nous avons entrée
	public function index(){
    if($_POST){
      $query = $this->crud->read_where('users', $this->input->post())->result();
			if(count($query)){
				$this->session->set_userdata(array(
					'username' => $query[0]->username,
					'user_id' => $query[0]->use_id,
					'is_logged_in' => true));
					redirect('login');
			}
    }else{
  		$this->load->view('login/index');
    }
	}







}
