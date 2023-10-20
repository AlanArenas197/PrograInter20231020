<?php
    require "funciones/conecta.php"
    $con = conecta();
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];
    $correo = $_REQUEST['correo'];
    $pass = $_REQUEST['pass'];
    $rol = $_REQUEST['rol'];
    $archivo_n = '';
    $archivo = '';
    $passEnc = md5 ($pass);

    $res = $con -> query($sql);
    header("Location: empleados_lista.php");
?>