<html>
	<head>
		<title>Lectura del fichero de datos</title>
	</head>
	<body>
		<?php
			if (isset($_GET['action']))
				$action=$_GET['action'];
			else
				$action="select";
				
			switch($action){
				case 'update':
					break;
				case 'insert':
					// Insertamos el nuevo valor
					if($_POST)
					{						
						include("../application/models/procesar.php");
						header("Location: users.php?action=select");
						exit();
					}
					else
					{	
						// Definir arrayUser
						$arrayUser=array('', '', '', '', '', '', '', '', '');
						
						include("../application/views/formulario.php");						
					}					
					break;
				case 'delete':
					break;
				case 'select':
					// Mostrar tabla
					$uploadDirectory=$_SERVER['DOCUMENT_ROOT']."/uploads";
					$filename="datosPersonales.txt";
					
					// Leemos en una unica linea los datos personales guardados en el fichero de texto
					$textoCompleto=file_get_contents($filename);
					
					// Separamos ahora por filas
					$arrayTextoLineas=explode("\n", $textoCompleto);
					
					include("../application/views/select.php"); // Mostramos la tabla
					
					break;					
				default:
					break;
			}		
		?>				
	</body>
</html>

