<?php 
	require 'config/config.php';
	session_start();
	$email = $_SESSION['email'];


	$user = new Acme\Models\UserModel;
	$userInfos = $user->findBy('email', $email);

	$id = $userInfos->id;
	$name = $userInfos->name;
	$address = $userInfos->address;
	$phone = $userInfos->phone;
	$cep = $userInfos->CEP;
	$cpf = $userInfos->CPF;
	$email = $userInfos->email;
	$currentPassword = $userInfos->password;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Alterar informações | Loja virtual</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="public/assets/css/styles.css">
</head>
<body>
<?php require "Includes/Menu.php"; ?>
<div class="container" style="margin-top:70px; background-color: white; border:1px solid #ebebeb;">
<h2 align="center">Alterar minhas informações</h2>
	<hr>
		<form name="update"  id="form" method="post" style="margin-top:50px;">

			<div class="form-group row">
      			<label for="inputName13" class="col-sm-2 col-form-label">Nome</label>
      			<div class="col-sm-10">
        			<input type="text" name="name" class="form-control" id="inputEmail3 testandoo" placeholder="Nome completo" value="<?php echo $name; ?>">
      			</div>
    		</div>

     		<div class="form-group row">
      			<label for="inputName14" class="col-sm-2 col-form-label">Endereço</label>
      			<div class="col-sm-10">
      			  <input type="text" class="form-control" name="address" id="inputEmail4" placeholder="Digite seu endereço de entrega" value="<?php echo $address; ?>">
     	 		</div>
    		</div>
    		<hr>
    		<div class="form-group row">
      			<label for="inputEmail5" class="col-sm-2 col-form-label">Telefone</label>
      			<div class="col-sm-10">
        			<input type="text" class="form-control" name="phone" id="inputEmail5" placeholder="Digite seu telefone" value="<?php echo $phone; ?>">
      			</div>
    		</div>

    		<div class="form-group row">
      			<label for="inputEmail5" class="col-sm-2 col-form-label">CPF</label>
      			<div class="col-sm-10">
        			<input type="text" class="form-control" name="cpf" id="inputEmail5" placeholder="Digite seu CPF" value="<?php echo $cpf; ?>">
      			</div>
    		</div>

    		<div class="form-group row">
      			<label for="inputEmail5" class="col-sm-2 col-form-label">CEP</label>
      			<div class="col-sm-10">
        			<input type="text" class="form-control" name="cep" id="inputEmail5" placeholder="Digite seu CEP" value="<?php echo $cep; ?>">
      			</div>
    		</div>

    		<hr>
    		<div class="form-group row">
      			<label for="inputEmail5" class="col-sm-2 col-form-label">Email</label>
      			<div class="col-sm-10">
        			<input type="email" class="form-control" name="email" id="inputEmail5" placeholder="Digite seu e-mail" value="<?php echo $email; ?>">
      			</div>
    		</div>

    		<div class="form-group row">
     		 	<label for="inputPassword3" class="col-sm-2 col-form-label">Senha Atual</label>
      			<div class="col-sm-10">
       				<input type="password" class="form-control" name="OldPassword" id="inputPassword3" placeholder="Senha atual">
      			</div>
    		</div>

			<div class="form-group row">
     		 	<label for="inputPassword3" class="col-sm-2 col-form-label">Senha Nova</label>
      			<div class="col-sm-10">
       				<input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Senha nova">
      			</div>
    		</div>
    		<input type="hidden" value="updating" name="update">
     		<div class="form-group row">
     			<label for="inputPassword3" class="col-sm-2 col-form-label">Confirmar senha nova</label>
      			<div class="col-sm-10">
        			<input type="password" class="form-control" name="confirmPassword" id="inputPassword3" placeholder="Confirme sua senha nova">
      			</div>
    		</div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <center><button type="submit" class="btn btn-primary">Atualizar</button></center>
      </div>
    </div>
		</form>

		<?php 
		if(isset($_POST['update'])){

			$newName = $_POST['name'];
			$newAddress = $_POST['address'];
			$newPhone = $_POST['phone'];
			$newCpf = $_POST['cpf'];
			$newCep = $_POST['cep'];
			$newEmail = $_POST['email'];

			$canChangePassword = true;

			if(isset($_POST['OldPassword'])){
				if(!empty($_POST['password']) && !empty($_POST['confirmPassword'])){
				
					$OldPassword = md5($_POST['OldPassword']);
					$newPassword = md5($_POST['password']);
					$newConfirmPassword = md5($_POST['confirmPassword']);

					if($OldPassword == $currentPassword){
						if($newPassword == $newConfirmPassword){
							$newPasswordFinal = $newPassword;
							$canChangePassword = true;
						}else{
							$canChangePassword = false;
							$newPasswordFinal = $currentPassword;
							echo "<script>alert('Senhas novas não são iguais');</script>";
						}
					}else{
						$canChangePassword = false;
						echo"<script>alert('Sua senha está errada!');</script>";
					}
				}else{
					$newPasswordFinal = $currentPassword;
				}
			}else{
				$newPasswordFinal = $currentPassword;
			}

			if($canChangePassword == true){
				$updateUser = $user->update($id, [
					'name' => $newName,
					'address' => $newAddress,
					'phone' => $newPhone,
					'CPF' => $newCpf,
					'CEP' => $newCep,
					'email' => $newEmail,
					'password' => $newPasswordFinal
					]);
	
				if($updateUser){

					$nameForSession = trim($newName);
					$arrayName = explode(" ", $nameForSession);
					$_SESSION['username'] = $arrayName[0];

					$_SESSION['email'] = $newEmail;
					
					echo "<script>alert('Alterado com Sucesso!'); location.href ='index.php';</script>";

				}
			}

		}
		?>
</div>
</body>
</html>