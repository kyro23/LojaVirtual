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
				header('Location:index.php');
			}
		}
	}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Cadstrar Produtos | Loja Virtual</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="../public/assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.2/tinymce.min.js"></script>
	<style type="text/css">
		
		#main{
			width: 80%;
			background-color: white;
			border:1px solid #ebebeb;
			margin-left: 18%;
			
		}
	</style>

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<?php require "Includes/Menu.php"; require"Includes/Sidebar.php"; ?>
			<div class="container" id="main">
				<h3 align="center">Cadstrar um novo Produto:</h3>
				<hr>
				<form name="subscribeProducts" action="server/insertProduct.php" method="post" enctype="multipart/form-data">
					
			<div class="form-group row">
      			<label for="inputName13" class="col-sm-2 col-form-label">Nome do Produto</label>
      			<div class="col-sm-10">
        			<input type="text" name="productName" class="form-control" id="inputEmail3 testandoo" placeholder="Nome do produto" required="">
      			</div>
    		</div>
    		<hr>
    		<div class="form-group row">
    			<label for="productImg" class="col-sm-2 col-form-label">Imagem do Produto (thumbnail)</label>
				<input type="file" name="img" id="productImg" required="">
				<img width="150" height="150" class=""/>
			</div>
    		<div class="form-group row">
    			<label for="productImg" class="col-sm-2 col-form-label">Imagem demonstrativa Produto 1</label>
				<input type="file" name="imgDemo1" id="productImg" required="">
				<img width="150" height="150"/>
			</div>
    		<div class="form-group row">
    			<label for="productImg" class="col-sm-2 col-form-label">Imagem demonstrativa Produto 2</label>
				<input type="file" name="imgDemo2" id="productImg" required="">
				<img width="150" height="150" class="imgPreview"/>
			</div>

			<hr>
     		<div class="form-group row">
      			<label for="inputName14" class="col-sm-2 col-form-label">Código do Produto</label>
      			<div class="col-sm-10">
      			  <input type="text" class="form-control" name="productCode" id="inputEmail4" placeholder="Código do Produto" required="">
     	 		</div>
    		</div>

    		<div class="form-group row">
      			<label for="inputEmail5" class="col-sm-2 col-form-label">Fabricante</label>
      			<div class="col-sm-10">
        			<input type="text" class="form-control" name="productFactory" id="inputEmail5" placeholder="Fabricante do Produto" required="">
      			</div>
    		</div>

			<div class="form-group row">
      			<label for="inputEmail5" class="col-sm-2 col-form-label">Estoque</label>
      			<div class="col-sm-10">
        			<input type="text" class="form-control" name="stock" id="inputEmail5" placeholder="Informe a quantidade de produtos que tem em estoque" required="">
      			</div>
    		</div>

    		<div class="form-group row">
      			<label for="inputEmail5" class="col-sm-2 col-form-label">Preço</label>
      			<div class="col-sm-10">
        			<input type="text" class="form-control" name="productPriece" id="inputEmail5" placeholder="Preço do Produto" required="">
      			</div>
    		</div>
    		<div class="form-group row">
    			<label for="category" class="col-sm-2 col-form-label">Categoria</label>
			    <fieldset class="form-group row">
			    	<div class="col-sm-10">
						<select class="custom-select" name="category">
								<option selected value="hardware">Hardware</option>
								<option value="periferic">Periférico</option>
								<option value="stock">Armazenamento</option>
								<option value="eletronic">Eletrônicos</option>
						</select>
			    	</div>

			    </fieldset>
		    </div>

			<div class="form-group row">
    			<label for="category" class="col-sm-2 col-form-label">Subcategoria</label>
			    <fieldset class="form-group row">
			    	<div class="col-sm-10">
						<select class="custom-select" name="subcategory">
								<option selected value="placasDeVideo">Hardware->Placas de Video</option>
								<option value="processadores">Hardware->Processadores</option>
								<option value="placasMae">Hardware->Placas Mãe</option>
								<option value="fontes">Hardware->Fontes de alimentação</option>
								<option value="ram">Hardware->Memórias RAM</option>
								<option value="placsDeSom">Hardware->Placas de Som</option>
								<option value="mouses">Perifericos->Mouses</option>
								<option value="teclados">Periféricos->Teclados</option>
								<option value="webCam">Periféricos->WebCam</option>
								<option value="adaptadores">Periféricos->Adaptadores</option>
								<option value="cabos">Periféricos->Cabos</option>
								<option value="hardDrive">Armazenamento->HD</option>
								<option value="penDrive">Armazenamento->Pen Drive</option>
								<option value="memoryCard">Armazenamento->Catrões de Memória</option>
								<option value="ssd">Armazenamento->SSD</option>
								<option value="calculadoras">Eletronicos->Calculadoras</option>
								<option value="multiMidiaPlayers">Eletronicos->Multimidia Players</option>
								<option value="playerDeMidia">Eletronicos->Players de Midia</option>
								<option value="walkTalk">Eletronicos->Walk-Talk</option>
						</select>
			    	</div>

			    </fieldset>
		    </div>

    		<div class="form-group row">
     		 	<label for="inputPassword3" class="col-sm-2 col-form-label">Descrição (obs.: Antes de colocar as especificações do produto, digite "///" Para separar as especificações da descrição curta.</label>
      			<div class="col-sm-10">
       				<textarea name="description" class="textarea" rows="10" cols="60"></textarea> <br>
      			</div>
    		</div>

     		<div class="form-group row">
     			<label for="inputPassword3" class="col-sm-2 col-form-label">Confirmar senha</label>
      			<div class="col-sm-10">
        			<input type="password" class="form-control" name="confirmPassword" id="inputPassword3" placeholder="Confirme sua senha para cadstrar o produto" required="">
      			</div>
    		</div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <center><button type="submit" class="btn btn-primary">Cadastrar Produto</button></center>
      </div>
    </div>
    	<input type="hidden" name="insert" value='insert'>

				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src='assets/js/fileReader.js'></script>
 <script type="text/javascript" src="assets/js/tynemceconfig.js"></script>
</body>
</html>