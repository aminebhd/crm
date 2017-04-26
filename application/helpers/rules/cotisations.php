<?php

$config = array(
		array(
			'field' => 'cot_description',
			'label' => 'Désignation',
			'rules' => 'required|trim'
		),
		array(
			'field' => 'cot_plafond',
			'label' => 'Plafond',
			'rules' => 'trim|decimal'
		),
		array(
			'field' => 'cot_employee',
			'label' => 'Part Salariale',
			'rules' => 'trim|decimal'
		),
		array(
			'field' => 'cot_company',
			'label' => 'Part Patronal',
			'rules' => 'trim|decimal'
		)
);

?>
