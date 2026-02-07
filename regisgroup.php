<?php include("conexion.php"); ?>
<link rel="stylesheet" href="css/estilos.css">

<form method="POST">
<h2>Registro Grupos</h2>

Grado (1-11):
<input type="number" name="grado" min="1" max="11" required>

<button name="gen">Generar</button>
<button name="guardar">Registrar</button>
</form>

<?php
if(isset($_POST['guardar'])){
$grado=$_POST['grado'];
$codigo=$grado."01-V";

$conn->query("INSERT INTO grupos(grado,grupo_codigo)
VALUES('$grado','$codigo')");
echo "Grupo guardado";
}
?>
