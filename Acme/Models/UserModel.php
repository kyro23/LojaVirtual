<?php 
	namespace Acme\Models;
	use Shop\Database\ShopModel;

	class UserModel extends ShopModel{
		protected $table = "users";

		public function login($email, $password){
			$query = "select * from $this->table WHERE email = '$email' AND password = '$password'";
			$pdo = $this->database->prepare($query);


			try{
				$pdo->execute();
				return $pdo->fetch();
				
			}catch(PDOExeption $e){
				dump($e->getMessage());
			}
		}
	}

?>