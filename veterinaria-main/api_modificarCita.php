<?php
include "db.php";

$id = $_POST["id"];

$cliente = $_POST["cliente"];
$mascota = $_POST["mascota"];
$tipo = $_POST["tipo_cita"];
$motivo = $_POST["motivo"];
$veterinario = $_POST["veterinario"];
$prioridad = $_POST["prioridad"];
$hora = $_POST["hora"];
$fecha = $_POST["fecha"];

$sql = "UPDATE cita SET
        cliente='$cliente',
        mascota='$mascota',
        tipo_cita='$tipo',
        motivo='$motivo',
        veterinario='$veterinario',
        prioridad='$prioridad',
        hora='$hora',
        fecha='$fecha'
        WHERE id_cita=$id";

if ($conexion->query($sql)) {
    echo "ok";
} else {
    echo "error: " . $conexion->error;
}
?>
