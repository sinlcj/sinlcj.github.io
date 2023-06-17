<?php
require_once('conexion.php');
$conexion = connect_db();

$nombre = @$_POST["nombre"];
$apellido = @$_POST["apellido"];
$correo = @$_POST["correo"];
$password = @$_POST["password"];
$usuario = @$_POST["usuario"];

$passEncriptado = password_hash($password,PASSWORD_DEFAULT ,['cost' => 12]);

$nombreCompleto = $nombre . " " . $apellido; 

$consulta = "INSERT INTO usuarios (
                                    USU_nombres,
                                    USU_correo,	
                                    USU_usuario,
                                    USU_contrasenia
                                  ) VALUES 
                                  (
                                    '$nombreCompleto',
                                    '$correo',
                                    '$usuario',
                                    '$passEncriptado'
                                  )";
if (mysqli_query($conexion, $consulta)) {
  echo json_encode([true]);
}else {
  echo json_encode([false]);
}

