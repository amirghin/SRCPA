<section class="content row">

	<div class="login col-md-6">
		<form action="insert_user.php" method="POST" role="form" data-parsley-validate>
			<fieldset>
				<legend>Crear Usuario</legend>
				<div class="form-group">
					<label for="nombre_usuario">Nombre <span class="error">*</span></label>
					<input name="nombre_usuario" type="text" class="form-control" required/>
				</div>
				<div class="form-group">
					<label for="tipo">Contrasena <span class="error">*</span></label>
					<input name="password" type="password" class="form-control" required/>
				</div>

				<div class="form-group">
					<label for="tipo">Verificar Contrasena <span class="error">*</span></label>
					<input name="verificar_password" type="password" class="form-control" required/>
				</div>

				<div class="form-group">
					<label for="tipo">Tipo Usuario <span class="error">*</span></label>
						<select name='tipo_usuario'>
								<option value="1">Recepcionista</option>
								<option value="2">Veterinario</option>
						
						</select>
				</div>


				<input type="submit" value="Crear Cuenta">
			</fieldset>
			
			
		</form>	
	</div>
</section>

