<?php

$config = array(
		array(
			'field' => 'igr_start',
			'label' => 'Début de tranche',
			'rules' => 'required|trim|decimal'
		),
		array(
			'field' => 'igr_end',
			'label' => 'Fin de tranche',
			'rules' => 'trim|decimal'
		),
		array(
			'field' => 'igr_rate',
			'label' => 'Taux impot',
			'rules' => 'required|trim|decimal'
		),
		array(
			'field' => 'igr_deduction',
			'label' => 'Déduction',
			'rules' => 'required|trim|decimal'
    )
);

?>
