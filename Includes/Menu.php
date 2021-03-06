<?php 
if (!isset($_SESSION)){
	session_start();
}
	
?>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php">Loja Virtual</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="index.php">Início <span class="sr-only">(current)</span></a></li>

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
	          <input type="text" style="width: 145px;" class="form-control" placeholder="Pesquisar no Site">
	        </div>
	        <button type="submit" class="btn btn-default">Pesquisar</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	      <?php if(!isset($_SESSION['username'])){ ?>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Fazer Login</a>
          <ul class="dropdown-menu" style="padding:20px; width: 300px;">
              <form class="form-signin" action="server/login.php" method="post">
                  <h3 class="form-signin-heading">Faza Login</h3>
                  <label for="inputEmail" class="sr-only">Endereço de e-mail</label>
                  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputPassword" class="sr-only">Senha</label>
                  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="remember-me"> Lembrar de mim nas próximas sessões
                    </label>
                  <a href="cadastro.php">Ainda não tem uma conta? Cadastre-se já!</a>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
                </form>
          </ul>
          </li>

	      	<?php }else{ ?>
	      	<?php
	      		require (__DIR__.'/../config/config.php'); 
	      		$emailUser = $_SESSION['email'];
	      		$userClass = new Acme\Models\UserModel;
	      		$user = $userClass->findBy('email', $emailUser);
	      		$typeUser = $user->type;

	      	 ?>
	      	 <?php if($typeUser == 'admin'): ?>
	      	 	 <li><a href="private/verify.php">DashBoard</a></li>

	      	 <?php endif; ?>
  	       	<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"> </span> <?php echo $_SESSION['username']; ?><span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="server/logout.php"><span class="glyphicon glyphicon-log-out"> </span> Logout</a></li>
	            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"> </span> Meus Pedidos</a></li>
	            <li><a href="#"><span class="glyphicon glyphicon-envelope"> </span> Minha Conta</a></li>
	            <li><a href="updateInfos.php"><span class="glyphicon glyphicon-cog"> </span> Alterar Informações</a></li>
	          </ul>
	        </li>
          	<?php } ?>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	  </div>
	</nav>


