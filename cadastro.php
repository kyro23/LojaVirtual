<?php require 'config/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastre-se | Loja Virtual</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script>
		$.noConflict();
	</script>
	<script type="text/javascript" src="public/assets/js/verifyUser.js"></script>
	<link rel="stylesheet" type="text/css" href="public/assets/css/styles.css">
</head>
<body>
<?php require "Includes/Menu.php"; ?>
	<div class="container" style="margin-top:70px; background-color: white; border:1px solid #ebebeb;">
		<h1 align="center">Cadastre-se no site para receber todas as novidades</h1>
		
		<form name="cadastro"  id="form" method="post" style="margin-top:50px;">

			<div class="form-group row">
      			<label for="inputName13" class="col-sm-2 col-form-label">Nome</label>
      			<div class="col-sm-10">
        			<input type="text" name="name" class="form-control" id="inputEmail3 testandoo" placeholder="Nome completo">
      			</div>
    		</div>

     		<div class="form-group row">
      			<label for="inputName14" class="col-sm-2 col-form-label">Endereço</label>
      			<div class="col-sm-10">
      			  <input type="text" class="form-control" name="address" id="inputEmail4" placeholder="Digite seu endereço de entrega">
     	 		</div>
    		</div>

    		<div class="form-group row">
      			<label for="inputEmail5" class="col-sm-2 col-form-label">Telefone</label>
      			<div class="col-sm-10">
        			<input type="text" class="form-control" name="phone" id="inputEmail5" placeholder="Digite seu telefone">
      			</div>
    		</div>

    		<div class="form-group row">
      			<label for="inputEmail5" class="col-sm-2 col-form-label">CPF</label>
      			<div class="col-sm-10">
        			<input type="text" class="form-control" name="cpf" id="inputEmail5" placeholder="Digite seu CPF">
      			</div>
    		</div>

    		<div class="form-group row">
      			<label for="inputEmail5" class="col-sm-2 col-form-label">CEP</label>
      			<div class="col-sm-10">
        			<input type="text" class="form-control" name="cep" id="inputEmail5" placeholder="Digite seu CEP">
      			</div>
    		</div>

    		<div class="form-group row">
      			<label for="inputEmail5" class="col-sm-2 col-form-label">Email</label>
      			<div class="col-sm-10">
        			<input type="email" class="form-control" name="email" id="inputEmail5" placeholder="Digite seu e-mail">
      			</div>
    		</div>

    		<div class="form-group row">
     		 	<label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
      			<div class="col-sm-10">
       				<input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Senha">
      			</div>
    		</div>

     		<div class="form-group row">
     			<label for="inputPassword3" class="col-sm-2 col-form-label">Confirmar senha</label>
      			<div class="col-sm-10">
        			<input type="password" class="form-control" name="confirmPassword" id="inputPassword3" placeholder="Confirme sua senha">
      			</div>
    		</div>


    <div class="form-group row">
        <hr>
      <div class="col-sm-10">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" name="terms" type="checkbox"> Aceito os <a href="">Termos de uso e regras do site</a>
          </label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <center><button type="submit" class="btn btn-primary">Cadastre-se!</button></center>
      </div>
    </div>
		</form>
	</div>

	<?php 
		if(isset($_POST['terms'])){



			if($_POST['name'] != ''){
				if($_POST['address'] != ''){
					if($_POST['phone'] != ''){
						if($_POST['cpf'] != ''){
							if($_POST['cep'] != ''){
								if($_POST['password'] != ''){
									if($_POST['confirmPassword'] != ''){
										if($_POST['password'] == $_POST['confirmPassword']){
											if($_POST['email'] != ''){
												
												$name = $_POST['name'];
												$address = $_POST['address'];
												$phone = $_POST['phone'];
												$cpf = $_POST['cpf'];
												$cep = $_POST['cep'];
												$password = md5($_POST['password']);
												
												
												$email = $_POST['email'];

												$user = new Acme\Models\UserModel;
												$user->create(
													[
														'name' => $name,
														'address' => $address,
														'phone' => $phone,
														'CPF' => $cpf,
														'CEP' => $cep,
														'email' => $email,
														'password' => $password
													]
												);

												echo"<script>location.href='index.php';</script>";
											}else{
												echo"<script>alert('email invalido');</script>";
											}
										}else{
											echo"<script>alert('senhas não correspondem');</script>";
										}
									}else{
										echo"<script>alert('confirme sua senha')";
									}
								}else{
									echo"<script>alert('senha invalida');</script>";
								}
							}else{
								echo"<script>alert('cep invalido');</script>";
							}
						}else{
							echo"<script>alert('cpf invalido');</script>";
						}
					}else{
						echo"<script>alert('telefone invalido');</script>";
					}
				}else{
					echo"<script>alert('endereço inválido');</script>";
				}
			}else{
				echo"<script>alert('nome inválido');</script>";
			}
		}
	 ?>
</body>
</html>