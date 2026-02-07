<?php include("conexion.php"); ?>

<?php
// Registrar alumno
if($_POST){
    $nombre = $_POST['nombre'];
    $ap = $_POST['ap'];
    $am = $_POST['am'];
    $grupo = $_POST['grupo'];

    $sql="INSERT INTO alumnos(nombre,ap_paterno,ap_materno,grupo_id)
          VALUES('$nombre','$ap','$am','$grupo')";
    $conn->query($sql);
}


$grupos = $conn->query("SELECT id,grupo_codigo FROM grupos WHERE activo=1");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<h2>Registro de Alumnos</h2>

<form method="POST">
Nombre:<br>
<input name="nombre" required><br>

Apellido Paterno:<br>
<input name="ap" required><br>

Apellido Materno:<br>
<input name="am" required><br>

Seleccionar Grupo:<br>
<select name="grupo">
<?php while($g=$grupos->fetch_assoc()){ ?>
<option value="<?=$g['id']?>"><?=$g['grupo_codigo']?></option>
<?php } ?>
</select><br><br>

<button>Registrar Alumno</button>
</form>

<br>
<a href="../regisgroup/regisgroup.php">
<button>Registrar Grupo</button>
</a>

</body>
</html>
