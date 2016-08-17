<?php
	require '../classes/CountryRepository.php';

	header('Content-type: application/json');
	
	echo  ")]}'\n"; // this line prevents js/json hijacking angular stripsd this when it parses the json on the client side.

	$countries = CountryRepository::getCountries();
	echo json_encode($countries);