<?php 
	require 'config/config.php';

	$system = new Acme\Classes\System;

	$string = '1';
	$stringEncode = $system->encodeString($string);
	$stringDecode = $system->decodeString($stringEncode);
	$stringNoInjection = $system->anti_injection($string);

	print_r($stringEncode);

	echo "<br>";

VkZaRk9WQlJQVDA9
?>