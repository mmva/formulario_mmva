<?php

	/*echo "<pre>GET: ";
	print_r($_GET);
	echo "</pre>";		

	echo "<pre>POST: ";
	print_r($_POST);
	echo "</pre>";	

	echo "<pre>FILES: ";
	print_r($_FILES);
	echo "</pre>";*/

	$filename = $_FILES['foto']['tmp_name']; // Nombre temporal
	$directory = $_SERVER['DOCUMENT_ROOT']."/uploads";
	$destination = $directory."/".$_FILES['foto']['name'];	
	$path_parts = pathinfo($destination);
	
	echo "<pre>PATH INFO: ";
	print_r($path_parts);
	echo "</pre>";
	
	// Buscamos el nombre de la foto en el directorio
	$i=0;
	while(in_array($_FILES['foto']['name'], scandir($directory)))
	{
		$i++;	
		$name = $directory."/".$path_parts['filename']."_".$i.".".$path_parts['extension'];
	}		

	// Cargar fotos en uploads
	move_uploaded_file($filename, $name);
	
	// Generamos string con la informacion
    foreach($_POST as $value)
    {
    	if(is_array($value))
    	{
    		$value=implode(',', $value);
    	}
    	
        $arrayUser[]=$value;
    }
    
    $textUser = implode('|', $arrayUser)."\r\n";
	
	// Escribimos ahora en un fichero
	$fichero="datosPersonales.txt";
	
	file_put_contents($fichero, $textUser, FILE_APPEND); 
?>	

