<?php

$config = array(
		array(
			'field' => 'emp_number',
			'label' => 'number',
			'rules' => 'required|trim|integer'
		),
		array(
			'field' => 'emp_civility',
			'label' => 'Civilité',
			'rules' => 'required|trim|integer'
		),
		array(
			'field' => 'emp_address',
			'label' => 'Adresse',
			'rules' => 'required|trim'
		),
		array(
			'field' => 'emp_fname',
			'label' => 'Prénom',
			'rules' => 'required|trim|alpha'
		),
		array(
			'field' => 'emp_lname',
			'label' => 'Nom',
			'rules' => 'required|trim|alpha'
		),
		array(
			'field' => 'emp_city',
			'label' => 'Ville',
			'rules' => 'required'
		),
		array(
			'field' => 'emp_postal',
			'label' => 'Code postale',
			'rules' => 'required|integer'
		),
		array(
			'field' => 'emp_cin',
			'label' => 'CIN',
			'rules' => 'required|alpha_numeric_spaces'
		),
		array(
			'field' => 'emp_ce',
			'label' => 'Code postale',
			'rules' => 'required|integer'
		),
		array(
			'field' => 'emp_cnss',
			'label' => 'CNSS',
			'rules' => 'required|integer'
		),
		array(
			'field' => 'emp_police',
			'label' => 'N° Police',
			'rules' => 'required|integer'
		),
		array(
			'field' => 'emp_birthday',
			'label' => 'Date de naissance',
			'rules' => 'required|callback_valid_date'
		),
		array(
			'field' => 'emp_entry',
			'label' => "Date d'entrée",
			'rules' => 'required|callback_valid_date'
		),
		array(
			'field' => 'emp_fsituation',
			'label' => "Situation Familiale",
			'rules' => 'required|integer'
		),
		array(
			'field' => 'emp_childs',
			'label' => "Nombre d'enfants",
			'rules' => 'required|integer'
		),
		array(
			'field' => 'emp_function',
			'label' => "Fonction",
			'rules' => 'required'
		),
		array(
			'field' => 'emp_nationality',
			'label' => "Nationalité",
			'rules' => 'required'
		),
		array(
			'field' => 'emp_benifits',
			'label' => "Allocations",
			'rules' => 'required'
		),
		array(
			'field' => 'emp_deduction',
			'label' => "Nombre de déduction",
			'rules' => 'required'
		),
		array(
			'field' => 'emp_paiement',
			'label' => "Méthode de paiement",
			'rules' => 'required|integer'
		),
		array(
			'field' => 'emp_bank',
			'label' => "Nom de la banque",
			'rules' => 'required'
		),
		array(
			'field' => 'emp_bankagence',
			'label' => "Nom de l'agence",
			'rules' => 'required'
		),
		array(
			'field' => 'emp_rib',
			'label' => "Numéro de RIB",
			'rules' => 'required|integer'
		)
	);

?>
