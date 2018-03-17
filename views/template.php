<!DOCTYPE html>
<html>
<head>
	<title>Meu site</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
</head>
<body>


	<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="<?php echo BASE_URL; ?>" class="navbar-brand">Controle KM</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					
						<li><a href="<?php echo BASE_URL; ?>funcionarios">Funcionarios</a></li>
						<li><a href="<?php echo BASE_URL; ?>motocicletas">Motocicletas</a></li>
						
				
				</ul>
			</div>
		</nav>
	<?php $this->loadViewInTemplate($viewName,$viewData); ?>


		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
		</body>
</html>