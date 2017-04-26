<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Companies extends My_Controller {

	public function __construct(){
		parent::__construct();
		$this->data['pageTitle'] = 'Gestion des Société';
	}

	# Affiche la liste des société que nous avons entrée
	public function index(){
		$this->data['query'] = $this->crud->read_where('companies', array('office_id' => 1));
		$this->load->view('layout', $this->data);
	}

	# Ajouter une nouvelle société
	public function add_company(){
		if($_POST){
			$validateForm = form_check('companies');
			if($validateForm['error']){
				$this->crud->insert('companies', $this->input->post());
				$validateForm['toast'] = "Gocha, votre nouveau employé à été bien ajouté";
			}else{
				$validateForm['toast'] = "Une ou plusieurs erreurs ont été constaté veuillez verifier votre formulaire";
			}
			echo json_encode($validateForm);
		}else{
			$this->load->view('layout', $this->data);
		}
	}







}
