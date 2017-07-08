<?php

$destino= "software.realize.101@gmail.com ";
$a= $_POST['dato'];
$b= $_POST['dato2'];
$resultado= $_POST[''];

$resultado = $a * $b;

$contenido= "Dato: ". $a . "\nDato: ". $b. "\nResultado: ".$resultado ;
if (mail($destino, "Miguel Angel Trinidad Cruz", $contenido)){
	
    echo "MAIL ENVIADO EXITOSAMENTE";
}else{
	
	echo "ERROR DEL ENVIO";
}
		
?>
