<?php
	require (__DIR__."/../config/config.php");

	$system = new Acme\Classes\System;
	
	$imagem = $system->decodeString($_GET['PicNum']);
	$imagemSelect = $system->anti_injection($imagem);
	$typeImage = $system->anti_injection($_GET['img']);

	$coluna = 'id';

	$products = new Acme\Models\ProductModel;
	$product = $products->findBy($coluna, $imagem);

	header("content-type: image/gif");
	if(empty($product->$typeImage)){
		echo file_get_contents("../public/assets/img/noImgProduct.png");
	}else{
		echo $product->$typeImage;
	}