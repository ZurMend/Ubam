<?php include("conexion.php"); ?>

<html>
<head>
<link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<h2>Alumnos registrados</h2>

<table border="1">
<tr>
<th>Nombre</th>
<th>Edad</th>
</tr>

<?php
$res = $conn->query("SELECT * FROM alumnos");

while($row = $res->fetch_assoc()){
    echo "<tr>
    <td>{$row['nombre']}</td>
    <td>{$row['edad']}</td>
    </tr>";
}
?>

</table>

</body>
</html>
