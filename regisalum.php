<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/estilos.css">
<title>Registro Alumno</title>
</head>

<body>

<h2>Registrar Alumno</h2>

<form method="POST">
Nombre: <input type="text" name="nombre" required><br>
Edad: <input type="number" name="edad" required><br>
<input type="submit" name="guardar" value="Guardar">
</form>

<?php
if(isset($_POST['guardar'])){
    $n = $_POST['nombre'];
    $e = $_POST['edad'];

    $sql = "INSERT INTO alumnos(nombre,edad) VALUES('$n','$e')";
    $conn->query($sql);

    echo "Alumno registrado";
}
?>

</body>
</html>
