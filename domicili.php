<?php include_once('conexBD.php');?>
<html><head> <title>INDEX</title></head>
<body> <h1>Domicili</h1>
<?php
$sql="SELECT * FROM tdomicilio";
$resultado= mysqli_query($conexion, $sql);
if (mysqli_num_rows($resultado) > 0) {
while($row= mysqli_fetch_assoc($resultado)) {
echo "<h1>id: " . $row["idDomicilio"]. " -Via: " . $row["tipovia"]. "-Direccion: " . $row["direccion"]. "-Portal: " . $row["portal"]."-CP: " . $row["CP"]."-IDalumno: " . $row["idAlumno"].
"</h1>";
}
} else echo "0 filas";
?>
</body></html>