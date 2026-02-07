<?php
$conn = new mysqli("localhost","root","","control_escolar");

if($conn->connect_error){
    die("Error de conexión");
}
?>
