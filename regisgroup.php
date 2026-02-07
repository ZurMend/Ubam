<?php include("conexion.php"); ?>

<?php
if($_POST){
    $carrera=$_POST['carrera'];
    $turno=$_POST['turno'];
    $grado=$_POST['grado'];

    $codigo=$grado."01";

    $conn->query("INSERT INTO grupos(carrera_id,turno_id,grado,grupo_codigo)
                  VALUES('$carrera','$turno','$grado','$codigo')");
}

// cargar datos
$carreras=$conn->query("SELECT * FROM carreras WHERE activo=1");
$turnos=$conn->query("SELECT * FROM turnos WHERE activo=1");
?>

<h2>Registro de Grupos</h2>

<form method="POST">

Carrera:
<select name="carrera">
<?php while($c=$carreras->fetch_assoc()){ ?>
<option value="<?=$c['id']?>"><?=$c['nombre']?></option>
<?php } ?>
</select><br>

Turno:
<select name="turno">
<?php while($t=$turnos->fetch_assoc()){ ?>
<option value="<?=$t['id']?>"><?=$t['nombre']?></option>
<?php } ?>
</select><br>

Grado (1-11):
<input type="number" name="grado" min="1" max="11"><br>

<button>Registrar</button>
</form>
