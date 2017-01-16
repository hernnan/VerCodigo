<?php 
	require_once("clases/usuario.php");
	$u = new Usuarios();
	$datos = $u->getDatos();
	
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
	<link rel="stylesheet" href="css/style.css">	
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Listado de Usuario</title>

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
		  <div class="panel-heading">
		  <?php 
		  		if(isset($_GET["m"]))
		  		{
		  			switch ($_GET["m"]) {
		  				case '1':
		  					?>
		  					<div class="alert alert-success">
		  						<button type="button" class="close" data-dismiss="alert">x</button>
		  						El registro se ha insertado exitosamente):
		  					</div>		
		  					<?php 
		  				break;
		  				case '2':
		  					?>
		  					<div class="alert alert-success">
		  					<button type="button" class="close" data-dismiss="alert">x</button>
		  						El registro se ha modificado exitosamente):
		  					</div>		
		  					<?php 
		  				break;
		  				case '3':
		  					?>
		  					<div class="alert alert-success">
		  					<button type="button" class="close" data-dismiss="alert">x</button>
		  						El registro se ha eliminado exitosamente):
		  					</div>		
		  					<?php 
		  				break;
		  			
		  			}
		  		}

		   ?>
		    <h3 class="panel-title">Listado de Usuarios</h3>
		  </div>
		  <div class="panel-body">
		    <p>
		    	<a href="agregar.php" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>	
		    </p>
		    <table class="table table-bordered">
		    	<thead>
		    		<tr>
		    			<th>ID</th>
		    			<th>Nombre</th>
		    			<th>Email</th>
		    			<th>Teléfono</th>
		    			<th>Fecha</th>
		    			<th>Acciones</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<?php 
		    			foreach($datos as $datos)
		    			{
		    				?>
		    				<tr>
		    					<th><?php echo $datos->id?></th>
		    					<th><?php echo $datos->nombre?></th>
		    					<th><?php echo $datos->correo?></th>
		    					<th><?php echo $datos->telefono?></th>
		    					<th><?php echo $datos->fecha ?></th>
		    					<th>
		    						<a href="editar.php?id=<?php echo $datos->id?>" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
		    						<a href="javascript:void(0);" onclick="eliminar('eliminar.php?id=<?php echo $datos->id?>'); " ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
		    					</th>
		    				</tr>
		    				<?php 
		    			}
		    		  ?>
		    	</tbody>
		    	
		    </table>
		  </div>
		</div>
    </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
  
    <script src="js/bootstrap.min.js"></script>
    <script src="js/funciones.js"></script>
  </body>
</html>