<?php

include_once("lib_php/funciones_db.php");

$conn = connect_db();

$sql = "SELECT id, Nombre ,Correo From usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0 ){
  // ouput data of each row
  while($row = $result->fetch_assoc()){
  	echo "id: " . $row["id"]. "- Nombre:" . $row["Nombre"]. "-  Correo" . $row["Correo"]. "<br>";
  }	
} else {
  echo "no existen usuarios";	
}

?>

<?php

$sql = "SELECT id, Nombre ,Ubicacion From restaurantes";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {

?>

<li><?php echo $row["Nombre"]."<strong>".$row["Ubicacion"]."</strong>"  ?>
<?php

}
	$conn->close();


?>


