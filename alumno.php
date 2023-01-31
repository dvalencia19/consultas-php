<?php include_once('conexBD.php');?>
<html><head> <title>INDEX</title></head>
<body> <h1>Consultar</h1>
<?php
$sql="SELECT * FROM talumno";
$resultado= mysqli_query($conexion, $sql);
if (mysqli_num_rows($resultado) > 0) {
while($row= mysqli_fetch_assoc($resultado)) {
echo "<h1>- Name: " . $row["nombre"]. " -Edad: " . $row["edad"]. " -Observacion: " . $row["observaciones"].
"</h1>";
}
} else echo "0 filas";
?>
</body></html>