<?php
	// create A-Z array
	$az = range('A', 'Z');
	// $str = implode (", ", $az);

	//	$prefixed_array = preg_filter('/^/', '#', range('A', 'Z'));			// #A, #B, #C, #D, etc
	$cssIdrange =  implode (", ", preg_filter('/^/', '#', range('A', 'Z')));

	// create user list
	$user = array(
		array(
		"first"	=> "Lana",
		"last"	=> "Sijsling",
		"sex"	=> "female",
		'link'	=> "lana.html",
		),
		array(
		"first" => "Harriet",
		"last" => "Kiyai",
		"sex"	=> "female",
		'link'	=> "harriet.html",
		),
		array(
		"first" => "Lucien",
		"last" => "Koot",
		"sex"	=> "male",
		'link'	=> "lucien.html",
		),
		array(
		"first" => "Aarnoud",
		"last" => "Meijer",
		"sex"	=> "male",
		'link'	=> "aarnoud.html",
		)
	);
?>
