<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet" media="screen">
	<link href="<?= base_url('css/bootstrap-responsive.min.css') ?>" rel="stylesheet">	
        	<link href="<?= base_url('css/micss.css') ?>" rel="stylesheet">	
	<title>Control de cursos</title>
</head>
<body>
	<!-- Barra superior fija con opciones principales de menú -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#"> <?= $titulo ?> </a>
				<div class="nav-collapse collapse">
					<ul class="nav">
					<li> <a href="#"> Inicio </a> </li>
					<li> <a href="#"> Acerca de </a> </li>
					<li> <a href="#"> LogIn </a> </li>
					<li> <a href="#"> Inicio </a> </li>
					<li> <a href="#"> Cambio de clave </a> </li>
				</ul>


				</div>
			</div>
		</div>
	</div>
</body>

<div class="container-fluid">
  <div class="row-fluid">
    <div class="span3">
      <!--Sidebar content-->
      <p> Menú sistema</p>
    </div>
    <div class="span10">
      <!--Body content-->
      <?= $this->load->view($contenido) ?>
    </div>
  </div>
</div>
 	
 	    <script src="<?= base_url('js/jquery.js')?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js')?>" ></script>
</body>
</html>



