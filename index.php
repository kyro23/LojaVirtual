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
	<style type="text/css">
		
		#sidebar1{
        	position: fixed;
        	right:0;
	    	margin-right: -20px;
	    	z-index: 999999;
		}
	</style>
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
          <?php 
          	$product = new Acme\Models\ProductModel;
          	$system = new Acme\Classes\System;

          	$products = $product->read();

          	foreach($products as $product):

          		$name = $product->name;

          		$descriptionFull = $product->description;
          		$descriptionCut = explode('///', $descriptionFull);
          		$halfDescription = substr($descriptionCut[0], 0, 150);

          		$priece = $product->priece;

          		$idProduct = $product->id;
          		$idProductEncode = $system->encodeString($idProduct);

          ?>
            <div class="col-xs-6 col-lg-4 center product">
           
              <h5><a href="product.php?id=<?php echo $idProductEncode; ?>"><?php echo $name ?> <a href=""></h5>
              <a href="product.php?id=<?php echo $idProductEncode; ?>"> <img src="Server/productImage.php?PicNum=<?php echo $idProductEncode; ?>&img=img1" width="240" height="240"></a>
              <p><?php echo $halfDescription; ?></p>
              <center><p><a class="btn btn-default" href="product.php?id=<?php echo $idProductEncode; ?>" role="button">Comprar R$ <?php echo $priece; ?></a></p></center>
            </div><!--/.col-xs-6.col-lg-4-->

      		<?php endforeach; ?>
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
<div class="col-xs-6 col-sm-3" id="sidebar1" style="">
        <h4>#Top 10 da semana</h4>
          <div class="list-group">
          <?php for($n = 0; $n <= 9; $n ++): ?>
            <a href="#">Jogo</a>
        <?php endfor; ?>

          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

	</div>
</body>
</html>