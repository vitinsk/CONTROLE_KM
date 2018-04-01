  <!DOCTYPE html>
  <html>
  <head>
  	<title>Controle-KM</title>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="<?php BASE_URL?>assets/css/estilo.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
          <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/scripts.js"></script> 
  </head>


  <body>





    <h1>
      <?php 
    
    ?>
      
    </h1>

  	<nav class="navbar navbar-inverse" style="background-color: #23282e; height: 10px" >
  			<div class="container-fluid">
  				<div class="navbar-header">
  					<a href="<?php echo BASE_URL; ?>" class="navbar-brand"></a>
  				</div>
  				<ul class="nav navbar-nav navbar-right">
  					
  						<li><a href="<?php echo BASE_URL; ?>funcionarios">Funcionarios</a></li>
  						<li><a href="<?php echo BASE_URL; ?>motocicletas">Motocicletas</a></li>
  						
  				
  				</ul>
  			</div>
  		</nav>
  	




  <div class="nav-side-menu">
      <div class="brand">Controle KM</div>
      <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
    
          <div class="menu-list">
    
              <ul id="menu-content" class="menu-content collapse out">
                  <li>
                    <a href="<?php echo BASE_URL; ?>">
                    <i class="fa fa-dashboard fa-lg"></i> Inicio
                    </a>
                  </li>

                  <li  data-toggle="collapse" data-target="#cadastro" class="collapsed active">
                    <a href="#"><i class="fa fa-gift fa-lg"></i> Cadastros <span class="arrow"></span></a>
                  </li>
                  <ul class="sub-menu collapse" id="cadastro">
                      <li><a href="<?php echo BASE_URL; ?>funcionarios">Funcionarios</a></li>
                      <li><a href="<?php echo BASE_URL; ?>motocicletas">Motocicletas</a></li>
                     

                  </ul>


                  <li data-toggle="collapse" data-target="#movimentacao" class="collapsed">
                    <a href="#"><i class="fa fa-globe fa-lg"></i> Movimentação <span class="arrow"></span></a>
                  </li>  
                  <ul class="sub-menu collapse" id="movimentacao">

                    <?php foreach ($array as $nomes) {  //LAÇO PARA LISTAR NOMES DOS FUNCIONARIOS NO MENU DROPDOWN?>                

                     <a href="servicos&id=<?php echo $nomes['id'];?>"><li><?php echo $nomes['nome']; ?></li></a>
                     <?php } ?>  
                  </ul>


                  <li data-toggle="collapse" data-target="#rotas" class="collapsed">
                    <a href="#"><i class="fa fa-car fa-lg"></i> Rotas <span class="arrow"></span></a>
                  </li>
                  <ul class="sub-menu collapse" id="rotas">
                    <li>Incluir</li>
                    <li>Observar</li>
                  </ul>

                       <li data-toggle="collapse" data-target="#new" class="collapsed">
                    <a href="#"><i class="fa fa-users fa-lg"></i> Listagem <span class="arrow"></span></a>
                  </li>
                  <ul class="sub-menu collapse" id="new">
                    <li>Novo Relatório</li>
                  </ul>


      

                   <li>
                    <a href="#">
                    <i class="fa fa-users fa-lg"></i> Usuarios
                    </a>
                  </li>

                    <li>
                    <a href="<?=BASE_URL?>">
                    <i class="fa fa-play fa-lg"></i> Sair
                    </a>
                  </li>
              </ul>
       </div>
  </div>

        <?php $this->loadViewInTemplate($viewName,$viewData);

            // echo "<h1 style='text-align: center;'>".$this->mostrar($msg)."</h1>";

         ?>
  		</body> 
      <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>

  </html>