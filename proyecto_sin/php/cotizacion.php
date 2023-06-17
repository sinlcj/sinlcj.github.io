<?php 
require_once('conexion.php');
$conexion = connect_db();

$fecha = @$_POST["fecha"];
$ciudad = @$_POST["ciudad"];
$presupuesto = @$_POST["presupuesto"];

$maxPresupuesto = explode("-", $presupuesto)[1];

$resCiudad = mysqli_query($conexion, "SELECT * FROM ciudades WHERE CIU_id = $ciudad");
$precioCiudad = mysqli_fetch_assoc($resCiudad)["CIU_precio"];


$resTransporte = mysqli_query($conexion, "SELECT * FROM transportes");

$arrayTransValidos = [];
foreach ($resTransporte as $transporte) {
  //precio valido
  if($precioCiudad + $transporte["TRANS_precio"] <= $maxPresupuesto){
    $precioFinal = $precioCiudad + $transporte["TRANS_precio"];
    $transporte["precioFinal"] = $precioFinal;
    array_push($arrayTransValidos, $transporte);
  }
}

echo json_encode($arrayTransValidos);

/* $resTransporte = mysqli_query($conexion, "SELECT * FROM transportes WHERE TRANS_id = $transporte");
$precioTransporte = mysqli_fetch_assoc($resTransporte)["TRANS_precio"]; */