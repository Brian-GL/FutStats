<?php
	include("conexion.php");

	$sql = "SELECT * FROM persona";
	$stmt = $conn->prepare($sql);
	$stmt->execute();

	$stmt->setFetchMode(PDO::FETCH_ASSOC);
		
	if((!empty($_POST['name'])) && (!empty($_POST['age'])) && (!empty($_POST['sex'])) && (!empty($_POST['rol'])) && (!empty($_POST['username'])) && (!empty($_POST['correo'])) && (!empty($_POST['contrasenia'])) && (!empty($_POST['contraseniaconfirmada'])))
	{
		$nombre = $_POST['name'];
		$edad = $_POST['age'];
		$sexo = $_POST['sex'];
		$rol = $_POST['rol'];

		$usuario_nombre = $_POST['username'];
		$correo = $_POST['correo'];
		$password = $_POST['contrasenia'];
		$password2 = $_POST['contraseniaconfirmada'];

		foreach ($stmt as $value) {
			$id = $value['id'];
		}
		++$id;

		if($password == $password2){
			$password = md5($password);

			$sqlper = "INSERT INTO persona (nombre, edad, sexo, rol) VALUES ('$nombre', '$edad', '$sexo', '$rol')";
			$sqluser = "INSERT INTO usuario (usuario_nombre, contrasenia, correo, id_persona) VALUES ('$usuario_nombre','$password','$correo','$id')";

			$conn->exec($sqlper);
			$conn->exec($sqluser);

			header("Location: index.html");
		}
	}
?>