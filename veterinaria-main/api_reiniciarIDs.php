<?php
include "db.php";

// Reiniciar contador interno
$sql1 = "SET @num = 0";
$conexion->query($sql1);

// Asignar nuevos IDs ordenados
$sql2 = "UPDATE cita SET id_cita = (@num := @num + 1) ORDER BY id_cita ASC";
$conexion->query($sql2);

// Reiniciar el AUTO_INCREMENT
$sql3 = "ALTER TABLE cita AUTO_INCREMENT = 1";
$conexion->query($sql3);

echo "ok";
?>
