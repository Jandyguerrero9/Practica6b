<?php

$mysqli = new mysqli("mysql", "root", "my-secret-password", "mi-aplicacion-php-mysql");

if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM usuarios";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . "<br>";
    }
} else {
    echo "No hay resultados";
}

$mysqli->close();