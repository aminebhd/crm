<?php

$config = array(
		array(
			'field' => 'com_name',
			'label' => 'Nom de la société',
			'rules' => 'required|trim'
		),
		array(
			'field' => 'com_activity',
			'label' => 'Acitivité',
			'rules' => 'required|trim'
		),
		array(
			'field' => 'com_if',
			'label' => 'Identifiant Fiscale',
			'rules' => 'required|trim|integer'
		),
		array(
			'field' => 'com_tp',
			'label' => 'Patente',
			'rules' => 'required|trim|integer'
		),
		array(
			'field' => 'com_rc',
			'label' => 'Registre du commerce',
			'rules' => 'required|trim|integer'
		),
		array(
			'field' => 'com_cnss',
			'label' => 'N° CNSS',
			'rules' => 'required|trim|integer'
		),
		array(
			'field' => 'com_ice',
			'label' => 'Code ICE',
			'rules' => 'required|trim|integer'
		),
		array(
			'field' => 'com_address',
			'label' => 'Adresse',
			'rules' => 'required|alpha_numeric_spaces'
		),
		array(
			'field' => 'com_city',
			'label' => 'Ville',
			'rules' => 'required'
		),
		array(
			'field' => 'com_state',
			'label' => 'Province',
			'rules' => 'required'
		),
		array(
			'field' => 'com_postal',
			'label' => 'Code postale',
			'rules' => 'required|trim|integer'
		),
		array(
			'field' => 'com_country',
			'label' => 'Pays',
			'rules' => 'required'
		),
		array(
			'field' => 'com_bank',
			'label' => "Nom de la banque",
			'rules' => 'required'
		),
		array(
			'field' => 'com_rib',
			'label' => "N° RIB",
			'rules' => 'required|trim|integer'
		),
		array(
			'field' => 'com_sector',
			'label' => "Secteur",
			'rules' => 'required'
		),
		array(
			'field' => 'com_accounting',
			'label' => "Type de comptabilité",
			'rules' => 'required'
		),
		array(
			'field' => 'com_year',
			'label' => "Date de depart",
			'rules' => 'required|callback_valid_date'
		),
		array(
			'field' => 'com_note',
			'label' => "Allocations",
			'rules' => 'trim'
		)
	);

?>
