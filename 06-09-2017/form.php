<!DOCTYPE HTML>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
        <title>F O R M U L A R I O</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body>
		<div class="container" style="margin-top:20px;">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-4 well">
					<h2>Alumno</h2>
					<hr>
					<form class="form-group" action="procesar.php" name="Form_1" method="POST">
						<label>Nombre_</label> <input type="text" name="nombre" class="form-control">
						<br>
						<label>Apellido_</label> <input type="text" name="apellido" class="form-control">
						<br>
						<label>Rut_</label> <input type="text" name="rut" class="form-control">
						<br>
						<input type="hidden" name="alumno_form">
						<button type="submit" class="btn btn-success">Enviar</button>
					</form>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-4 well">
					<h2>Academico</h2>
					<hr>
					<form class="form-group" action="procesar.php" name="Form_2" method="POST">
						<label>Ramo_</label> <input type="text" name="ramo" class="form-control">
						<br>
						<label>Nota_</label> <input type="text" name="nota" class="form-control">
						<br>
						<input type="hidden" name="ramo_form">
						<button type="submit" class="btn btn-info">Enviar</button>
					</form>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<script type="text/javascript" src="js/boostrap.js"></script>
		<script type="text/javascript" src="js/jquery-3.2.1.min"></script>
    </body>
</html>