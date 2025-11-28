<?php
include "db.php";

$texto = $_GET["buscar"];

$sql = "SELECT * FROM cita 
        WHERE cliente LIKE '%$texto%' 
        OR mascota LIKE '%$texto%' 
        LIMIT 1";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo json_encode($resultado->fetch_assoc());
} else {
    echo "no";
}
?>
