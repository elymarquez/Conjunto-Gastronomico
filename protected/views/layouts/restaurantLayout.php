<!DOCTYPE html>
<html>
<head>
	<title>Conjunto Gastronomico</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery-ui-1.10.3.custom.css">
	<script type="text/javascript">
	</script>
</head>

<body>
	<div class="container"> <!-- Tamaño predeterminado en bootstrap.css-->
	<!-- Cabecera -->
	<header> <!--todas las paginas iguales -->
		<h1><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logopenco.png" width="350" height="150"></h1>
	</header>
	
  <!-- BARRA DE MENÚ -->
  <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SG - Penco</a> <!-- Nombre del Sistema -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
    
    
        <li><a href="#">Bodega</a></li> <!--class="active">-->
        <li><a href="#">Cocina</a></li>
        <li><a href="#">Restaurant</a></li>
        <li><a href="#">Garzón</a></li>
        <li><a href="#">Proveedor</a></li>
        <li><a<?php $this->widget('zii.widgets.CMenu',array('items'=>array(
              array('label'=>'Administrar Usuarios', 
              'url'=>Yii::app()->user->ui->userManagementAdminUrl, 
              'visible'=>!Yii::app()->user->isGuest))));?></a></li>

      </ul>

      <!-- Busqueda -->
      <!--<form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <!-- Termino busqueda -->

      <!-- Lado derecho Logout -->
      <ul class="nav navbar-nav navbar-right">
            <li><a>Bienvenido <?php if(isset(Yii::app()->user->nombre))echo Yii::app()->user->nombre; ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo Yii::app()->createUrl('Usuario/editarUsuario/'.Yii::app()->user->ID); ?>">Editar Perfil</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo Yii::app()->createUrl('Usuario/logout'); ?>">Cerrar Sesión</a></li>
              </ul>
            </li>
          </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- FIN BARRA DE MENÚ -->

 <!-- Contenido dependiendo de cada página -->
 <?php 
    if(isset($content)) 
      echo $content;
    else 
     echo '
   <div class="alert alert-danger">
   <strong>No se a cargado la Pagina</strong> No tiene los permisos para acceder a la pagina.
   </div>'
   ;?>

<footer>
   		yes!!
</footer>
   <!--Fin Footer-->

</div> <!--Fin Container-->

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/demo.js" type="text/javascript"></script>


<?php echo Yii::app()->user->ui->displayErrorConsole(); ?>
</body>
</html>