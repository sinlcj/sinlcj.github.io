<?php
session_start();
require("conexion.php");
$conexion = connect_db();

if ($_POST['usuario'] !== "" && $_POST['contrasena'] !== "") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasenaSql= "";
    $nombreSql = "";

    $sentencia = $conexion->prepare("SELECT USU_usuario,USU_contrasenia,USU_nombres,USU_id  FROM usuarios WHERE USU_usuario = ? ");
    $sentencia->bind_param("s", $usuario);
    $sentencia->execute();
    $res = $sentencia->get_result();
    $filas = $res->num_rows;
    foreach ($res as $k) {
        $contrasenaSql = $k["USU_contrasenia"];
        $nombreSql = $k["USU_nombres"];
        $idUsuario = $k["USU_id"];
    }
    if ($filas !== 0) {
        if (password_verify($contrasena, $contrasenaSql)) {

            echo 1; // hay similitud con las contaseñas
            $_SESSION["nombre_trabajador"] = $nombreSql; // session con el nombre
            
            /* $_SESSION["dni"] = $dni; 
            $_SESSION["tiempo"]=1; */

        } else {
            echo 3; // la contra esta mal
        }
    } else {
        echo 2; //  user esta mal
    }
} else {
    echo 4; //ausencia de datos
}
