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
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard | Loja Virtual</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="../public/assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

</head>
<body>
<?php require('../includes/Menu.php'); ?>

  <div class="container-fluid">
      <div class="row">
      <?php require "Includes/Menu.php"; require"Includes/Sidebar.php"; ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Painel Administrativo da Loja Virtual</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <!--<img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">-->
              <div id="container" style="min-width: 200px; height: 200px; max-width: 600px; margin: 0 auto"></div>

              <h4>Produtos Vendidos</h4>
              <span class="text-muted">Quantidade de produtos que foram vendidos na loja.</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <div id="container1" style="min-width: 200px; height: 200px; max-width: 600px; margin: 0 auto"></div>
              
              <h4>Produtos em Estoque</h4>

              <span class="text-muted">Quantidade de produtos que estão em estoque na loja.</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
            <div id="container2" style="min-width: 200px; height: 200px; max-width: 600px; margin: 0 auto"></div>
              <h4>Pedidos</h4>
              <span class="text-muted">Quantidade de pedidos confirmados e em espera.</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <div id="container3" style="min-width: 200px; height: 200px; max-width: 600px; margin: 0 auto"></div>
              <h4>Produtos novos</h4>
              <span class="text-muted">Quantidade de produtos novos que chegam na loja.</span>
            </div>
          </div>

          <h2 class="sub-header">Lista de pedidos</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
               	<?php for($i = 0; $i<=15; $i++): ?>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
            	<?php endfor; ?>
            
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="../public/assets/js/holder.min.js"></script>
    <script type="text/javascript" src="assets/js/graphic.js"></script>
</body>
</html>