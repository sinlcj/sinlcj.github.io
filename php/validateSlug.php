<?php
function validarSlug($slugDinamico)
{
  require_once("conexion.php");
  $conexion = connect_db();
  $resCategorias = mysqli_query($conexion, "SELECT * FROM ciudades WHERE CIU_nombre='$slugDinamico'");
  if (mysqli_num_rows($resCategorias) > 0) {
    return true;  
  }
  return null;
}
