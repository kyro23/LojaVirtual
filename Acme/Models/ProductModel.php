<?php 
	namespace Acme\Models;
	use Shop\Database\ShopModel;

	class ProductModel extends ShopModel{
		protected $table = "products";
	
		public function updateImage($image, $field, $code){
			
			$finalName = time().'.jpg';
			if(move_uploaded_file($image['tmp_name'], $finalName)){

				$size = filesize($finalName);

				$mysqlImg = addslashes(fread(fopen($finalName, "r"), $size));
				
				$query = "UPDATE products SET `$field` = '$mysqlImg' WHERE code = '$code'";
				$pdo = $this->database->prepare($query);

				try {
					$pdo->execute();
					unlink($finalName);
					return $pdo->rowCount();	
				} catch (PDOException $e) {
					dump($e->getMessage());
				}
			}
		}
	}

?>