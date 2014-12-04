<?php
//Include "AppInit.php";
?>
<!DOCTYPE html>

	<head>
		<title>SRCPA</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>

	<body>
		<div id="wrapper" class="container-fluid">
			<header class="row">
				<h1>SRCPA</h1>
				<nav class="top-navigation row">
					<ul class="row">
						<li class="col-md-4"><a href="">Ver Expediente</a></li>
						<li class="col-md-4"><a href="">Crear Expediente</a></li>
						<li class="col-md-4"><a href="">Borrar Expediente</a></li>
					</ul>	
				</nav>
			</header>

			<section class="content row">
				<div class="ver_expediente">
					<h2>Ver expediente</h2>
				</div>
				<div class="crear_expediente">
					<h2>Crear expediente</h2>
					<form action="AppInit.php" method="POST" role="form">
						<fieldset class="col-md-6">
							<legend>Datos de la mascota</legend>
							<div class="form-group">
								<label for="nombre_mascota">Nombre <span class="error">*</span></label>
								<input name="nombre_mascota" type="text" class="form-control" required/>
							</div>
							<div class="form-group">
								<label for="tipo">Tipo <span class="error">*</span></label>
								<input name="tipo" type="text" class="form-control" required/>
							</div>
							<div class="form-group">
								<label for="raza">Raza</label>
								<input name="raza" type="text" class="form-control"/>
							</div>
							<div class="form-group">
								<label for="fecha_nacimiento">Fecha de nacimiento</label>
								<input name="fecha_nacimiento" type="text" class="form-control" required/>
							</div>
						</fieldset>
						<fieldset class="col-md-6">
							<legend>Datos del due&#241;o</legend>
							<div class="form-group">
								<label for="nombre">Nombre <span class="error">*</span></label>
								<input name="nombre" type="text" class="form-control" required/>
							</div>
							<div class="form-group">
								<label for="apellido">Primer Apellido <span class="error">*</span></label>
								<input name="apellido" type="text" class="form-control" required/>
							</div>	
							<div class="form-group col-md-6">
								<label for="telefono">Numero de telefono <span class="error">*</span></label>
								<input name="telefono" type="text" class="form-control" required/>
							</div>	
							<div class="form-group col-md-6">
								<label for="email">Email <span class="error">*</span></label>
								<input name="email" type="text" class="form-control" required/>
							</div>	
							<div class="form-group">
								<label for="cedula">Numero de Cedula <span class="error">*</span></label>
								<input name="cedula" type="text" class="form-control" required/>
							</div>
							
						</fieldset>

						<fieldset class="col-md-12">
							<legend>Informacion Medica</legend>
							<div class="form-group">
								<label for="condiciones">Condiciones <span class="error">*</span></label>
								<textarea name="condiciones" class="form-control" required/></textarea>
							</div>		
							<div class="form-group">
								<label for="condiciones">Medicamento Actual <span class="error">*</span></label>
								<textarea name="condiciones" class="form-control" required/></textarea>
							</div>					
						</fieldset>				
						<input type="submit" value="Enviar">
					</form>	
				</div>
				<div class="borrar_expediente">
					<h2>Borrar Expediente</h2>
				</div>
			</section>
		</div>
	</body
</html>

