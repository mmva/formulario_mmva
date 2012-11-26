<html>
	<head>
		<title>Select</title>
	</head>
	<body>
		<a href='?action=insert'>AGREGAR</a><br/><br/>
		
		<table border='1' cellpadding='5'>
			<tr>
				<th>Nombre</th>
				<th>Ciudad</th>
				<th>e-mail</th>
				<th>Lenguaje</th>
				<th>Contraseña</th>
				<th>Idiomas</th>
				<th>Descripción</th>
				<th>Mascotas</th>
				<th>Action</th>
			</tr>
		
		<?php 

		// Incluimos ahora las diferentes filas de la tabla con el contenido
		foreach($arrayTextoLineas as $users):
		?>
			<tr>
			<?php
			$user=explode("|", $users); // Creamos otro array con los datos de la fila recuperada
			foreach($user as $value):
			?>
				<td>
					<?= $value; ?>
				</td>
			<?php endforeach?>
			
				<td>
				<a href='#'>Editar</a>
				
				<a href='#'>Borrar</a>
				</td>
			</tr>
		<?php endforeach?>				
		</table>		
		
</body>
</html>



