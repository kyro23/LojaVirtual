<?php 
	namespace Shop\Database;

	use Acme\Interfaces\Imodel;
	use Shop\Database\Connection;
	use Shop\Database\AttributesCreate;
	use Shop\Database\AttributesUpdate;

	use PDOException;

	class ShopModel implements Imodel{

		protected $database;

		public function __construct(){
			$database = new Connection;
			$this->database = $database->connection();
		}

		public function create($attributes){
			$attributesCreate = new AttributesCreate();

			$fields = $attributesCreate->createFields($attributes);
			$values = $attributesCreate->createValues($attributes);
			 
			 
			$query = "insert into $this->table($fields) values($values)";

			
			$bindParameters = $attributesCreate->bindCreateParameters($attributes);
			$pdo = $this->database->prepare($query);
			try{
				
				$pdo->execute($bindParameters);
				return $this->database->lastInsertId();
			}catch(PDOExeption $e){
				
				dump($e->getMessage());
			}	

		}


		public function read(){
			$query = "select* from $this->table";
			$pdo = $this->database->prepare($query);

			try{

				$pdo->execute();
				return $pdo->fetchAll();

			}catch(PDOException $e){

				dump($e->getMessage());
			}

		}
		public function update($id, $attributes){
			$attributesUpdate = new AttributesUpdate;
			$fields = $attributesUpdate->updateFields($attributes);
			
			$query = "update $this->table set $fields where id = :id";
			$pdo = $this->database->prepare($query);

			$bindUpdateParameters = $attributesUpdate->bindUpdateParameters($attributes);
			$bindUpdateParameters['id'] = $id;

			
			try {
				$pdo->execute($bindUpdateParameters);
				return $pdo->rowCount();
				
			} catch (PDOException $e) {

				dump($e->getMessage());
				
			}

		}
		public function delete($name, $value){
			$query = "delete from $this->table WHERE $name = :$name";
			$pdo = $this->database->prepare($query);


			try{
				$pdo->bindParam(":$name", $value);
				$pdo->execute();
				return $pdo->rowCount();
				
			}catch(PDOExeption $e){
				dump($e->getMessage());
			}

		}
		public function findBy($name, $value){
			$query = "select * from $this->table WHERE $name = '$value'";
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