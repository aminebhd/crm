<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {


	public function index(){
		$this->load->view('layout', $this->data);
	}

	public function list_employee(){
		$this->data['page'] = "list_employee";
		$this->load->view('layout', $this->data);
	}

	public function add_employee(){
		$this->data['page'] = "add_employee";
		$this->load->view('layout', $this->data);
	}

	public function scale_ir(){
		$this->data['page'] = "scale_ir";
		$this->load->view('layout', $this->data);
	}

	public function cotisations(){
		$this->data['page'] = "cotisations";
		$this->load->view('layout', $this->data);
	}
	

}
