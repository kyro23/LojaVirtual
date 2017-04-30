<?php require 'config/config.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Loja virtual</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="public/assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="public/assets/css/index.css">
</head>
<body>
<?php require "Includes/Menu.php"; ?>

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