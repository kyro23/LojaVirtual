<?php 
ini_set('display_errors',1); 
$autoloadFile = 'vendor/autoload.php';
$autoloadFileOut = '../vendor/autoload.php';
$outAutoloadFileOut = '../../vendor/autoload.php';


if(file_exists($autoloadFile)){
require 'vendor/autoload.php';
}elseif(file_exists($autoloadFileOut)){
	require '../vendor/autoload.php';
}elseif(file_exists($outAutoloadFileOut)){
	require($outAutoloadFileOut);
}

?>