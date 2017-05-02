<?php 
	namespace Acme\Classes;
	use Acme\Interfaces\ISystem;

	class System implements ISystem{
		public function encodeString($string){
			$stringEncode = base64_encode($string);
			$stringEncode2 = base64_encode($stringEncode);
			$stringEncode3 = base64_encode($stringEncode2);
			$stringEncode4 = base64_encode($stringEncode3);
			return $stringEncode4;

		}
		public function decodeString($string){

			$stringDecode = base64_decode($string);
			$stringDecode2 = base64_decode($stringDecode);
			$stringDecode3 = base64_decode($stringDecode2);
			$stringDecode4 = base64_decode($stringDecode3);

			return $stringDecode4;
		}

		public function anti_injection($string){

			@$string = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show 	tables|#|\*|--|\\\\)/"),"",$string);
			$string = trim($string);
			$string = strip_tags($string);
			$string = addslashes($string);
			return $string;
		}
	}
?>