<!DOCTYPE html>
<html> <head>
        <title>CarSale - Sua Loja de São Lourenço</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta name="deion" content="Venda de Carros Importados, Nacionais de São Lourenço - PR">
        <meta name="deion" content="Fiat, 147, venda, compra, nacionais e importados">

        <!-- facebook - open, graphics (ig) -->
        <meta property="og:title" content="Car Sale">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:deion" content="Venda de Carris Importados, Nacionais de São Lourenço">
        <meta property="og:image" content="http://pos.professorburnes.com.br/carsale/imgs/carsale.jpg">
        <meta property="og:width" content="800">
        <meta property="og:height" content="315">

        <!-- Twitter - open, graphics (ig) -->
        <meta name="twitter:url" content="@dudu18xb">
        <meta property="og:image" content="http://pos.professorburnes.com.br/carsale/imgs/carsale.jpg">
        <meta name="twitter:title" content="Car Sale">

        <!-- chamando os jquery -->

        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-inputmask.min.js"></script>
        <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>

        <!-- chamando o css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

 </head>
 <body>
        <header>
            <div class="container">
                <div class="row">
                    <div  class="col-md-3 col-sm-3">
                        <a href="index.php">
                            <img src="imgs/logo.png">
                        </a>
                    </div>
                    <div class="col-md-9 col-sm-9 text-right">
                        <i class="fa fa-phone"></i> 0800 1406

                        <a href="http://www.facebook.com/dudu18xb">
                            <i class="fa fa-facebook"></i></a>
                        <a href="http://www.twitter.com/dudu18xb">
                            <i class="fa fa-twitter"></i></a>
                    </div> <!-- fechando o col -->
                </div> <!-- fechando o row -->
            </div>
</header>
<!-- colocar o icone que some e aparece   navbar fixtop   inverse mudar a cor-->
<nav class="navbar navbar-default">
	<div  class="container-fluid container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
				<i class="icon-bar"></i>
				<i class="icon-bar"></i>
				<i class="icon-bar"></i>
			</button>			
		</div>  <!-- nav-header -->

		<div id="menu" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li>
					<a href="index.php">Home</a></li>

				<li><a href="sobre">Sobre</a></li>
				<li class="dropdown"><a href="Javascript:;" class="dropdown-toggle" data-toggle="dropdown">Veiculos</a><ul class="dropdown-menu">
				<li><a href="nacionais">Nacionais</a></li>
			    <li><a href="importados">Importadoos</a></li></ul></li>
				<li><a href="contato">Contato</a></li>
			</ul>

			<form name="form1" class="navbar-form" class="navbar-right">
			<div class="input-group"><input type="text" placeholder="Buscar..." class="form-control">
			<div class="input-group-btn">
				<button type="submit" class="btn btn=default">
					<i class="fa fa-search"></i>
				</button>
					</div> <!--  input-group-btn -->		
				</div>		<!-- input group -->		
			</form> <!-- form -->
			
		</div> <!-- menu -- >
	</div>  <!-- container -->
</nav>  <!--  nav bar-->



<footer>
    <div class="container">
       <div class="row">
       	<div class="col-md-9 col-sm-9">
        	<p><?php echo date ("Y"); ?>Desenvolvido por Rafael Rodrigues - Todos direitos reservados</p>
        </div>

        <div class="col-md-3 col-sm-3 text-right">
            <i class="fa fa-phone"></i> 0800 1406
             <a href="http://www.facebook.com/dudu18xb">
           <i class="fa fa-facebook"></i></a>
             <a href="http://www.twitter.com/dudu18xb">
           <i class="fa fa-twitter"></i></a>
        </div>
                      	
      </div>
 </footer>
    </body>
</html>
