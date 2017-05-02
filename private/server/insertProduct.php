<?php 
	session_start();
	require(__DIR__.'/../.././config/config.php');

	if(isset($_POST['insert'])){
		
		$productName = $_POST['productName'];
		$img = $_FILES['img'];
		$imgDemo1 = $_FILES['imgDemo1'];
		$imgDemo2 = $_FILES['imgDemo2'];
		$productCode = $_POST['productCode'];
		$productFactory = $_POST['productFactory'];
		$priece = $_POST['productPriece'];
		$category = $_POST['category'];
		$subCategory = $_POST['subcategory'];
		$description = $_POST['description'];
		$stock = $_POST['stock'];

		$confirmPassword = md5($_POST['confirmPassword']);
		$userEmail = $_SESSION['email'];

		$user = new Acme\Models\UserModel;
		$verify = $user->login($userEmail, $confirmPassword);
		if($verify){

			$product = new Acme\Models\ProductModel;

			$insertProduct = $product->create(
				[
					'name'=> $productName,
					'code' => $productCode,
					'manufacturer' => $productFactory,
					'priece' => $priece,
					'category' => $category,
					'subcategory' => $subCategory,
					'stock' => $stock,
					'description' => $description
				]
			);

			if($insertProduct){
				$updImg = $product->updateImage($img, 'img1', $productCode);
				$updImg2 = $product->updateImage($imgDemo1, 'img2', $productCode);
				$updImg3 = $product->updateImage($imgDemo2, 'img3', $productCode);

				if($updImg && $updImg2 && $updImg3){
					header("Location:../dashboard.php");

				}else{
					echo "<script>alert('Imagens não Inseridas'); location.href='../subscribeProducts.php'; </script>";
				}

			}else{
				echo "<script>alert('Produto não inserido! Tente novamente.'); location.href='../subscribeProducts.php'; </script>";
			}
		}else{
			echo"<script>alert('Senha Incorreta!'); location.href='../subscribeProducts.php'; </script>";
		}
	}
?>