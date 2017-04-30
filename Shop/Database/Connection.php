<?php 
	namespace Shop\Database;

	use \PDO;

	class Connection{

		const INIFILE = './config/database.ini';
		const inifileTWO = '.././config/database.ini';
		private $iniData;

		public function __construct(){
			if(file_exists(self::INIFILE)){
				$this->iniData = parse_ini_file(self::INIFILE);
			}else{
				$this->iniData = parse_ini_file(self::inifileTWO);
			}
			/*$inifile = './conifg/database.ini';
			$inifileTwo = '.././config/database.ini';

			if(file_exists($inifile)){
				$this->iniData = parse_ini_file($inifile);
			}elseif(file_exists($inifileTwo)){
				$this->iniData = parse_ini_file($inifileTwo);
			}*/
		}

		public function connection(){
			$pdo = new PDO($this->iniData['driver'].':host='.$this->iniData['host'].';dbname='.$this->iniData['database'],$this->iniData['username'],$this->iniData['password']);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			return $pdo;
		}
	}
?>