<?php
include "db.php";

$accion = $_GET["accion"];

// Crear cita
if ($accion == "crear") {

    $cliente = $_POST["cliente"];
    $mascota = $_POST["mascota"];
    $veterinario = $_POST["veterinario"];
    $tipo = $_POST["tipo"];
    $motivo = $_POST["motivo"];
    $prioridad = $_POST["prioridad"];
    $hora = $_POST["hora"];
    $fecha = $_POST["fecha"];

    $sql = "INSERT INTO cita (cliente, mascota, veterinario, tipo_cita, motivo, prioridad, hora, fecha)
            VALUES ('$cliente', '$mascota', '$veterinario', '$tipo', '$motivo', '$prioridad', '$hora', '$fecha')";

    if ($conexion->query($sql)) {
        echo "ok";
    } else {
        echo "error: " . $conexion->error;
    }
}
?>
