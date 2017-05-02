<?php 
   $path = $_SERVER['SCRIPT_NAME'];
   $arrayPath = explode("/", $path);
   $fileName = $arrayPath[6];
?>

<?php if($fileName == 'dashboard.php'){ ?>
<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li class="active"><a href="dashboard.php">Visão geral <span class="sr-only">(current)</span></a></li>
    <li><a href="#">Pedidos</a></li>
    <li><a href="#">Produtos para chegar</a></li>
    <li><a href="#">Lista de Usuários</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li><a href="subscribeProducts.php">Cadastrar um novo Produto</a></li>
    <li><a href="">Nav item again</a></li>
    <li><a href="">One more nav</a></li>
    <li><a href="">Another nav item</a></li>
    <li><a href="">More navigation</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li><a href="">Nav item again</a></li>
    <li><a href="">One more nav</a></li>
    <li><a href="">Another nav item</a></li>
  </ul>
</div>
<?php }elseif($fileName == 'subscribeProducts.php'){ ?>
<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li ><a href="dashboard.php">Visão geral </a></li>
    <li><a href="#">Pedidos</a></li>
    <li><a href="#">Produtos para chegar</a></li>
    <li><a href="#">Lista de Usuários</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li class="active"><a href="subscribeProducts.php">Cadastrar um novo Produto <span class="sr-only">(current)</span></a></li>
    <li><a href="">Nav item again</a></li>
    <li><a href="">One more nav</a></li>
    <li><a href="">Another nav item</a></li>
    <li><a href="">More navigation</a></li>
  </ul>
  <ul class="nav nav-sidebar">
    <li><a href="">Nav item again</a></li>
    <li><a href="">One more nav</a></li>
    <li><a href="">Another nav item</a></li>
  </ul>
</div>
<?php } ?>