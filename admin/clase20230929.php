<?php
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $genero = $_POST["sexo"];
    $carrera = $_POST["carrera"];
    $contrasena = $_POST["pasw"];
    $promedio = $_POST["promedio"];
    $fecha = $_POST["fecha"];

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Correo: $correo</p>";
    echo "<p>Genero: $genero</p>";
    echo "<p>Carrera: $carrera</p>";
    echo "<p>Contraseña: $contrasena</p>";
    echo "<p>Promedio: $promedio</p>";
    echo "<p>Fecha Nacimiento: $fecha</p>";
?>