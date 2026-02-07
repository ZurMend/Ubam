<?php include("conexion.php"); ?>

<?php
// acciones
if(isset($_GET['ok'])){
    $conn->query("UPDATE alumnos SET estado='Aprobado' WHERE id=".$_GET['ok']);
}

if(isset($_GET['del'])){
    $conn->query("DELETE FROM alumnos WHERE id=".$_GET['del']);
}

if(isset($_GET['reset'])){
    $conn->query("UPDATE alumnos SET estado='Pendiente' WHERE id=".$_GET['reset']);
}

$al=$conn->query("
SELECT alumnos.*, grupos.grupo_codigo 
FROM alumnos 
JOIN grupos ON alumnos.grupo_id=grupos.id
");
?>

<h2>Alumnos Registrados</h2>

<table border="1">
<tr>
<th>ID</th>
<th>Alumno</th>
<th>Grupo</th>
<th>Estado</th>
<th>Acciones</th>
</tr>

<?php while($a=$al->fetch_assoc()){ ?>
<tr>
<td><?=$a['id']?></td>
<td><?=$a['nombre']." ".$a['ap_paterno']?></td>
<td><?=$a['grupo_codigo']?></td>
<td><?=$a['estado']?></td>
<td>
<a href="?ok=<?=$a['id']?>">✔</a>
<a href="?reset=<?=$a['id']?>">⟳</a>
<a href="?del=<?=$a['id']?>">✖</a>
</td>
</tr>
<?php } ?>
</table>
