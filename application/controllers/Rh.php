<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rh extends My_Controller {

	public function __construct(){
		parent::__construct();
		$this->data['pageTitle'] = 'Gestion des Ressources Humains';
	}

	# Traitement de la rublique des salariés / Liste des salaries
	public function index(){
		if($_POST){
			$validateForm = form_check('rh');
			if(count($this->crud->read_where('employies', array('emp_number' => $_POST['emp_number']))->result()) == 0){
				if($validateForm['error']){
					$this->crud->insert('employies', $this->input->post());
					$validateForm['toast'] = "Gocha, votre nouveau employé à été bien ajouté";
				}else{
					$validateForm['toast'] = "Une ou plusieurs erreurs ont été constaté veuillez verifier votre formulaire";
				}
			}else{
				$validateForm['error'] = false;
				$validateForm['toast'] = "Le matricule que vous avez entré existe deja pour un autre employé";
			}
			echo json_encode($validateForm);
		}else{
			$this->data['query'] = $this->crud->read_where('employies', array('emp_company_id' => 1));
			$this->load->view('layout', $this->data);
		}
	}

	public function edit_employee($id = null){
		$this->data['query'] = $this->crud->read_where('employies', array('emp_id' => $id));
		if(count($this->data['query']->result()) == 1){
			$this->load->view('layout', $this->data);
		}else{
			show_error("Vous devez suivre un lien correcte merci de revenie sur le tableau des employées");
		}
	}




}
