<?php
	include("conexion.php");

	$sql = "SELECT * FROM usuario";
	$stmt = $conn->prepare($sql);
	$stmt->execute();

	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$bandera = 0;

	//Validar Recepcion de datos
	if((empty($_POST['username'])) || (empty($_POST['contrasenia']))){
		header("Location: login.php");
		
	}else{
		foreach ($stmt as $valor) {
			if(($valor['usuario_nombre'] == $_POST['username']) && ($valor['contrasenia'] == md5($_POST['contrasenia']))){
				header("Location: index.html");
				$bandera = 1;
			}
		}
		if($bandera == 0){
			header("Location: login.php");
		}
	}	
?>