<?php include("conexion.php"); ?>
<link rel="stylesheet" href="css/estilos.css">

<form method="POST">
<h2>Registro Alumnos</h2>

<input name="nombre" placeholder="Nombre" required>
<input name="ap" placeholder="Apellido Paterno" required>
<input name="am" placeholder="Apellido Materno" required>

<select name="grupo">
<?php
$g=$conn->query("SELECT id,grupo_codigo FROM grupos");
while($r=$g->fetch_assoc()){
echo "<option value='{$r['id']}'>{$r['grupo_codigo']}</option>";
}
?>
</select>

<button formaction="regisgroup.php">Registro de Grupos</button>
<button name="guardar">Registrar alumno</button>
</form>

<?php
if(isset($_POST['guardar'])){
$conn->query("INSERT INTO alumnos(nombre,ap_paterno,ap_materno,grupo_id)
VALUES('{$_POST['nombre']}','{$_POST['ap']}','{$_POST['am']}','{$_POST['grupo']}')");
echo "Alumno registrado";
}
?>
