<?php

$config = array(
		array(
			'field' => 'set_smig',
			'label' => 'SMIG',
			'rules' => 'required|trim|decimal'
		),
		array(
			'field' => 'set_allocation',
			'label' => 'Charges de familles',
			'rules' => 'required|trim|decimal'
		),
		array(
			'field' => 'set_charge_professional',
			'label' => 'Charges professionels',
			'rules' => 'required|trim|decimal'
		),
		array(
			'field' => 'set_charge_plafond',
			'label' => 'Plafond',
			'rules' => 'required|trim|decimal'
		)
);

?>
