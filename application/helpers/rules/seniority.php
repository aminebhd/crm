<?php

$config = array(
		array(
			'field' => 'sen_year',
			'label' => 'Début de tranche',
			'rules' => 'required|trim|integer|max_length[2]'
		),
		array(
			'field' => 'sen_rate',
			'label' => 'Taux',
			'rules' => 'required|trim|decimal'
		)
);

?>
