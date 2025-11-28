<?php
include "db.php";

$sql = "SELECT * FROM cita ORDER BY id_cita ASC";
$resultado = $conexion->query($sql);

$citas = [];

while ($fila = $resultado->fetch_assoc()) {
    $citas[] = $fila;
}

echo json_encode($citas);
?>

