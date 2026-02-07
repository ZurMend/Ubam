<?php include("conexion.php"); ?>

<?php
if($_POST['tipo']=="carrera"){
$conn->query("INSERT INTO carreras(nombre) VALUES('".$_POST['nombre']."')");
}

$carreras=$conn->query("SELECT * FROM carreras");
?>

<h2>Configuración de Catálogos</h2>

<form method="POST">
<input name="nombre">
<input type="hidden" name="tipo" value="carrera">
<button>Registrar Carrera</button>
</form>

<table border="1">
<?php while($c=$carreras->fetch_assoc()){ ?>
<tr>
<td><?=$c['nombre']?></td>
<td>
<a href="desactivar.php?id=<?=$c['id']?>">Eliminar</a>
</td>
</tr>
<?php } ?>
</table>
