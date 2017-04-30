<?php 
	require(__DIR__.'/../config/config.php');
	if(isset($_POST)){
		$user = new Acme\Models\UserModel;
		$email = $_POST['email'];
		$password = md5($_POST['password']);

		$login = $user->login($email, $password);
		if($login){
			$name = trim($login->name);
			$email = $login->email;
			$arrayName = explode(" ", $name);
			
			session_start();
			$_SESSION['username'] = $arrayName[0];
			$_SESSION['email'] = $email;
			header('Location:../index.php');
		}else{
			header('Location:../index.php');
		}
	}else{
		header('Location:../index.php');
	}

?>