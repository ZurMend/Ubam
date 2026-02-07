<?php include("conexion.php"); ?>

<html>
<head>
<link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<h2>Catálogo de grupos</h2>

<ul>

<?php
$res = $conn->query("SELECT * FROM grupos");

while($row = $res->fetch_assoc()){
    echo "<li>".$row['nombre']."</li>";
}
?>

</ul>

</body>
</html>
