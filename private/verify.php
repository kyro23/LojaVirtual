<?php 
	require (__DIR__.'/../config/config.php');
	session_start();
	if(!empty($_SESSION)){
		if(isset($_SESSION['email'])){

			$email = $_SESSION['email'];
			$userClass = new Acme\Models\UserModel;
			$user = $userClass->findBy('email', $email);
			$typeUser = $user->type;

			if($typeUser != 'admin'){
				header('Location:../index.php');
			}
		}
	}else{
		header('Location:../index.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Verificação de Login | LojaVirtual</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="public/assets/css/styles.css">
	<style type="text/css">
		
		body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
	</style>
</head>
<body>
   <div class="container">

      <form class="form-signin" name='confirm' action="" method="post">
        <h2 class="form-signin-heading">Página restrita!</h2>
        <h3 class="form-signin-heading">Por favor, confirme seu login para continuar</h3>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" name='email' placeholder="Endereço de E-mail" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="hidden" name='verification' value='verified'>
        <input type="password" id="inputPassword" name='password' class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Confirmar</button>
      </form>

      <?php 
      	if(isset($_POST['verification'])){
      		$email = $_POST['email'];
      		$password = md5($_POST['password']);

      		$login = $userClass->login($email, $password);

     		if($login){
      			header('Location:dashboard.php');
      		}else{
      			header('Location:../index.php');
      		}

      	}

      ?>

</body>
</html>