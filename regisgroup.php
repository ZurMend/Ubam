<?php include("conexion.php"); ?>

<form method="POST">

Carrera:
<select name="carrera">
<?php
$c=$conn->query("SELECT id,nombre FROM carreras");
while($r=$c->fetch_assoc()){
echo "<option value='{$r['id']}'>{$r['nombre']}</option>";
}
?>
</select>

Turno:
<select name="turno">
<option>Matutino</option>
<option>Vespertino</option>
<option>Mixto</option>
</select>

Grado:
<input type="number" name="grado" min="1" max="11">

<button name="gen">Generar Grupo</button>
<button name="guardar">Registrar</button>

</form>

<?php
if(isset($_POST['gen'])){
$grado=$_POST['grado'];
echo "Grupo generado: ".$grado."01-V";
}

if(isset($_POST['guardar'])){
$grado=$_POST['grado'];
$codigo=$grado."01-V";

$conn->query("INSERT INTO grupos(carrera_id,turno_id,grado,grupo_codigo)
VALUES('{$_POST['carrera']}',1,'$grado','$codigo')");
}
?>
