<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];

    $sql = "DELETE FROM cita WHERE id_cita = $id";

    if ($conexion->query($sql)) {
        echo "ok";
    } else {
        echo "error: " . $conexion->error;
    }
}
?>
