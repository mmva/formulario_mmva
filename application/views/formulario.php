<html>
	<head>
		<title>Formulario: Datos Personales</title>
		<script>
			
		</script>
	</head>
	<body>
		<form action="?action=insert" method="post" enctype="multipart/form-data">
			<table cellpadding="10">
				<tr>
					<th colspan="4" align="left">DATOS PERSONALES</th>
				</tr>
				<tr>
					<td><b>Nombre:</b></td>
					<td><input type="text" size="35" id="nombre" name="nombre" value="<?= $arrayUser[0] ?>"/></td>
					<td><b>Ciudad:</b></td>
					<td>
						<select id="ciudad" name="ciudad">
							<option></option>
							<option value='zgz' <?php (strpos('zgz', $arrayUser[1])===FALSE)?'':'selected'; ?>>Zaragoza</option>
							<option value='hue' <?php (strpos('hue', $arrayUser[1])===FALSE)?'':'selected'; ?>>Huesca</option>
							<option value='ter' <?php (strpos('ter', $arrayUser[1])===FALSE)?'':'selected'; ?>>Teruel</option>
						</select>
					</td>					
				</tr>	
				<tr>
					<td><b>e-mail:</b></td>
					<td><input type="text" size="35" id="email" name="email" value="<?= $arrayUser[2] ?>"/></td>
					<td><b>Lenguaje:</b></td>
					<td>
						<input type="radio" id="leng" name="leng" value="java" <?= ($arrayUser[3]==='java')?'checked':''; ?>>JAVA</input>
						<input type="radio" id="leng" name="leng" value="php" <?= ($arrayUser[3]==='php')?'checked':''; ?>>PHP</input>
					</td>					
				</tr>	
				<tr>
					<td><b>Contraseña:</b></td>
					<td><input type="password" size="35" id="cont" name="cont"/></td>					
					<td><b>Idiomas:</b></td>
					<td>
						<input type="checkbox" id="castellano" name="language[]" value="cas" >Castellano
						<input type="checkbox" id="ingles" name="language[]" value="en" >Inglés
						<input type="checkbox" id="frances" name="language[]" value="fr" >Francés
					</td>					
				</tr>	
				<tr>
					<td><b>Descripción:</b></td>
					<td>
						<textarea id="descripcion" name="descripcion" rows="3" cols="35"><?= $arrayUser[6] ?></textarea>
					</td>
					<td><b>Foto:</b></td>
					<td>
						<input type="File" id="foto" name="foto">
					</td>					
				</tr>
				<tr>
					<td><b>Mascotas:</b></td>
					<td colspan="3">
						<select multiple id="mascotas[]" name="mascotas[]">
							<option value="perro">Perro</option>
							<option value="gato">Gato</option>
							<option value="conejo">Conejo</option>
							<option value="conejo">Hamster</option>
							<option value="cobaya">Hamster</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><input type="submit"/></td>
				</tr>				
			</table>
			
			<!--<input type="hidden" name="id" id="id"/> -->
		</form>			
	</body>
</html>




