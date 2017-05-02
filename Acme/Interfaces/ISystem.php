<?php 
	namespace Acme\Interfaces;

	interface ISystem{
		public function encodeString($string);
		public function decodeString($string);
		public function anti_injection($string);
	}

?>