<?php include("conexion.php"); ?>

<table border="1">
<tr>
<th>ID</th>
<th>Alumno</th>
<th>Grupo</th>
</tr>

<?php
$q=$conn->query("SELECT a.*,g.grupo_codigo 
FROM alumnos a 
JOIN grupos g ON a.grupo_id=g.id");

while($r=$q->fetch_assoc()){
echo "<tr>
<td>{$r['id']}</td>
<td>{$r['nombre']}</td>
<td>{$r['grupo_codigo']}</td>
</tr>";
}
?>
</table>
