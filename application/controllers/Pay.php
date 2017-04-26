<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pay extends My_Controller {

	public function __construct(){
		parent::__construct();
		$this->data['pageTitle'] = 'Paramétrage de Paie';
	}

	public function index(){
		$this->data['query'] = $this->crud->read_where('companies', array('office_id' => 1));
		$this->load->view('layout', $this->data);
	}

	public function scale_ir(){
		if($_POST){
			$validateForm = form_check('scale_ir');
			if($validateForm['error']){
				$this->crud->insert('igrscale', $this->input->post());
				$validateForm['toast'] = "Gotcha, votre nouvelle règle d'impot sur le revenu à été bien ajouté.";
			}else{
				$validateForm['toast'] = 'Une ou plusieurs erreurs ont été constaté veuillez verifier votre formulaire';
			}
			echo json_encode($validateForm);
		}else{
			$this->data['query'] = $this->crud->read_where('igrscale', array('office_id' => 1));
			$this->load->view('layout', $this->data);
		}
	}

	# Add or show seniority rate
	public function seniority(){
		if($_POST){
			$validateForm = form_check('seniority');
			if($validateForm['error']){
				$this->crud->insert('seniority', $this->input->post());
				$validateForm['toast'] = "Gotcha, votre nouveau barème d'ancienneté è été bien ajouté";
			}else{
				$validateForm['toast'] = 'Une ou plusieurs erreurs ont été constaté veuillez verifier votre formulaire';
			}
			echo json_encode($validateForm);
		}else{
			$this->data['query'] = $this->crud->read_where('seniority', array('office_id' => 1));
			$this->load->view('layout', $this->data);
		}
	}

	# Add or show cotisations
	public function cotisations(){
		if($_POST){
			$validateForm = form_check('cotisations');
			if($validateForm['error']){
				$this->crud->insert('cotisations', $this->input->post());
				$validateForm['toast'] = "Gotcha, votre nouvelle cotisation à été bien ajoutée";
			}else{
				$validateForm['toast'] = 'Une ou plusieurs erreurs ont été constaté veuillez verifier votre formulaire';
			}
			echo json_encode($validateForm);
		}else{
			$this->data['categories'] = $this->crud->read_where('categories', array('office_id' => 1));
			$this->data['query'] = $this->crud->read_where('cotisations', array('office_id' => 1));
			$this->load->view('layout', $this->data);
		}
	}

	# Add a new cotisations category
	public function categories(){
		if($_POST){
			$validateForm = form_check('categories');
			if($validateForm['error']){
				$values = count($_POST['cat_value']) >= 1 ? implode(',', $_POST['cat_value']) : '';
				$this->crud->insert('categories', array('cat_name' => $_POST['cat_name'], 'cat_value' => $values));
				$validateForm['toast'] = "Gotcha, votre nouvelle cotisation à été bien ajoutée";
			}else{
				$validateForm['toast'] = 'Une ou plusieurs erreurs ont été constaté veuillez verifier votre formulaire';
			}
			echo json_encode($validateForm);
		}else{
			show_404();
		}
	}

	public function finance(){
		if($_POST){
			$validateForm = form_check('finance');
			if($validateForm['error']){
				$this->crud->update('finance', $this->input->post(), array('set_office_id' => $this->user_id));
			}else{
				$validateForm['toast'] = 'Une ou plusieurs erreurs ont été constaté veuillez verifier votre formulaire';
			}
			echo json_encode($validateForm);
		}else{
			$this->load->view('layout', $this->data);
		}
	}










}
