<?php require 'config/config.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Loja virtual</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>

	 body{
	 	background-color:#F8F8FF;
	 }

	 .product{
	 	background-color:white;
	 	border: 1px solid #ebebeb;
	 	margin:2px;
	 	width: 288px;
	 }

	 #sidebar{
	 	background-color:white;
	 	border: 1px solid #ebebeb;
	 }

	 .listCategory{
	 	list-style-type: none;
	 }
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Loja Virtual</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Início <span class="sr-only">(current)</span></a></li>

	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hardware <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Placas de vídeo</a></li>
	            <li><a href="#">Processadores</a></li>
	            <li><a href="#">Placas Mãe</a></li>
	            <li><a href="#">Fontes de Alimentação</a></li>
	            <li><a href="#">Memórias RAM</a></li>
	            <li><a href="#">Placas de Som</a></li>
	          </ul>
	        </li>

	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Periféricos<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Teclados</a></li>
	            <li><a href="#">Mouses</a></li>
	            <li><a href="#">WebCam</a></li>
	            <li><a href="#">Adaptadores</a></li>
	            <li><a href="#">Cabos</a></li>
	          </ul>
	        </li>

	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Armazenamento<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Disco Rígido (HD)</a></li>
	            <li><a href="#">Pen Drive</a></li>
	            <li><a href="#">Cartões de Memória</a></li>
	            <li><a href="#">SSD</a></li>
	          </ul>
	        </li>

	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Eletrônicos<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Calculadoras</a></li>
	            <li><a href="#">Multimudia Players (MP)</a></li>
	            <li><a href="#">Player de Mídia HD</a></li>
	            <li><a href="#">Walk-Talk</a></li>
	          </ul>
	        </li>

	      </ul>
	      <form class="navbar-form navbar-right">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Pesquisar no Site">
	        </div>
	        <button type="submit" class="btn btn-default">Pesquisar</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Atendimento</a></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fazer Login</a>
          <ul class="dropdown-menu" style="padding:20px; width: 300px;">
              <form class="form-signin">
                  <h3 class="form-signin-heading">Faza Login</h3>
                  <label for="inputEmail" class="sr-only">Endereço de e-mail</label>
                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputPassword" class="sr-only">Senha</label>
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="remember-me"> Lembrar de mim nas próximas sessões
                    </label>
                  <a href="">Ainda não tem uma conta? Cadastre-se já!</a>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                </form>
          </ul>
          </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>


	<div class="container" style="margin-top:70px;">

	      <div class="row row-offcanvas row-offcanvas-right">


        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Top 10</button>
          </p>
          <div class="row">
          	<?php for($i = 0; $i<12; $i++){ ?>
            <div class="col-xs-6 col-lg-4 center product">
              <h2>ExemploProduto</h2>
              <img src="public/assets/img/noImgProduct.png" width="240" height="150">
              <p>Produto tal, descrição tal, tal tal tal tal PORRA</p>
              <p><a class="btn btn-default" href="#" role="button">Visualizar Mais... &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->

            <?php } ?>
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
	        <h4 align="center">Categorias</h4>

			<div class="panel panel-primary">
	  			<div class="panel-heading">
	    			<h3 class="panel-title">Hardware</h3>
	  			</div>
	  			<div class="panel-body">
	    			<li class="listCategory"><a href="#">Placas de Vídeo</a></li>
	    			<li class="listCategory"><a href="#">Processadores</a></li>
	    			<li class="listCategory"><a href="#">Placas Mãe</a></li>
	    			<li class="listCategory"><a href="#">Fontes de Alimentação</a></li>
	    			<li class="listCategory"><a href="#">Memórias RAM</a></li>
	    			<li class="listCategory"><a href="#">Placas de Som</a></li>
	  			</div>
			</div>

			<div class="panel panel-primary">
	  			<div class="panel-heading">
	    			<h3 class="panel-title">Periféricos</h3>
	  			</div>
	  			<div class="panel-body">
	    			<li class="listCategory"><a href="#">Mouses</a></li>
	    			<li class="listCategory"><a href="#">Teclados</a></li>
	    			<li class="listCategory"><a href="#">WebCam</a></li>
	    			<li class="listCategory"><a href="#">Adaptadores</a></li>
	    			<li class="listCategory"><a href="#">Cabos</a></li>
	  			</div>
			</div>

			<div class="panel panel-primary">
	  			<div class="panel-heading">
	    			<h3 class="panel-title">Armazenamento</h3>
	  			</div>
	  			<div class="panel-body">
	    			<li class="listCategory"><a href="#">Disco Rígido (HD)</a></li>
	    			<li class="listCategory"><a href="#">Pen Drive</a></li>
	    			<li class="listCategory"><a href="#">Cartões de Memória</a></li>
	    			<li class="listCategory"><a href="#">SSD</a></li>
	  			</div>
			</div>

			<div class="panel panel-primary">
	  			<div class="panel-heading">
	    			<h3 class="panel-title">Eletrônicos</h3>
	  			</div>
	  			<div class="panel-body">
	    			<li class="listCategory"><a href="#">Calculadoras</a></li>
	    			<li class="listCategory"><a href="#">Multimidia Players (MP)</a></li>
	    			<li class="listCategory"><a href="#">Player de Mídia HD</a></li>
	    			<li class="listCategory"><a href="#">Walk-Talk</a></li>
	  			</div>
			</div>


        </div>
      </div><!--/row-->
		

	</div>

</body>
</html>