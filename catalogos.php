<?php include("conexion.php"); ?>

<form method="POST">
<input name="carrera" placeholder="Nueva carrera">
<button name="add">Registrar</button>
</form>

<?php
if(isset($_POST['add'])){
$conn->query("INSERT INTO carreras(nombre) VALUES('{$_POST['carrera']}')");
}
?>
