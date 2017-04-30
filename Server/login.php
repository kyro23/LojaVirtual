<?php 
	require(__DIR__.'/../config/config.php');
	if(isset($_POST)){
		$user = new Acme\Models\UserModel;
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$login = $user->login($email, $password);
		if($login){
			$name = trim($login->name);
			$arrayName = explode(" ", $name);
			
			session_start();
			$_SESSION['username'] = $arrayName[0];
			header('Location:../index.php');
		}else{
			header('Location:../index.php');
		}
	}else{
		header('Location:../index.php');
	}

?>