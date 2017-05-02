<?php 
	namespace Shop\Database;

	use \PDO;

	class Connection{

		const INIFILE = './config/database.ini';
		const inifileTWO = '.././config/database.ini';
		const INIFILETREE = '../.././config/database.ini';
		private $iniData;

		public function __construct(){
			if(file_exists(self::INIFILE)){
				$this->iniData = parse_ini_file(self::INIFILE);
			}elseif(file_exists(self::inifileTWO)){
				$this->iniData = parse_ini_file(self::inifileTWO);
			}elseif(file_exists(self::INIFILETREE)){
				$this->iniData = parse_ini_file(self::INIFILETREE);
			}
		}

		public function connection(){
			$pdo = new PDO($this->iniData['driver'].':host='.$this->iniData['host'].';dbname='.$this->iniData['database'],$this->iniData['username'],$this->iniData['password']);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			return $pdo;
		}
	}
?>