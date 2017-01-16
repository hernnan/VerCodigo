<?php 
	require_once("clases/usuario.php");
	$u = new Usuarios();
	
	if(!isset($_GET["id"]) or !is_numeric($_GET["id"]))
	{
		die ("error 404");
	}
	
	$datos=$u->getDatosPorId($_GET["id"]);
	if(sizeof($datos)==0)
	{

	}
	if(isset($_POST["nombre"]))
	{
		$u->actualizar();
		header("Location:index.php?m=2");
	}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
		
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Editar Usuario</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    	<div class="panel panel-primary">
		    <ol class="breadcrumb">
				<li><a href="http://localhost/tallerphp/">INICIO</a></li>
				<li class="active">Editar Usuario</li>
			</ol>
		  <div class="panel-heading">
		    <h3 class="panel-title">Editar Usuario</h3>
		  </div>
		  <div class="panel-body">
		  	  <form name="form" action="" method="post">
		  	  		<p>
		  	  			<label for="nombre">Nombre</label>
		  	  			<input type="text" name="nombre" placeholder="Nombre" autofocus="true" required="true" value="<?php echo $datos[0]->nombre;?>">
		  	  		</p>
		  	  		<p>
		  	  			<label for="nombre">Email</label>
		  	  			<input type="email" name="correo" placeholder="Email" required="true" value="<?php echo $datos[0]->correo;?>">
		  	  		</p>
		  	  		<p>
		  	  			<label for="nombre">Teléfono</label>
		  	  			<input type="text" name="telefono" placeholder="Telefono" required="true" value="<?php echo $datos[0]->telefono;?>">
		  	  		</p>
		  	  		<p>
		  	  			<label for="nombre">Fecha</label>
		  	  			<input type="date" name="fecha" required="true" value="<?php echo $datos[0]->fecha;?>">
		  	  		</p>
		  	  		<hr>
		  	  		<input type="hidden" name="id" value="<?php echo $datos[0]->id; ?>">
		  	  		<input type="submit" value="Enviar" class="btn btn-primary">

		  	  </form>		  	
		    
		  </div>
		</div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
  
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>