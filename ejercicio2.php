<?php
    function crearArreglo($nombre, $direccion, $telefono, $correo) {
        date_default_timezone_set('America/Bogota');

        $fechaHora = date("Y-m-d H:i:s");

        // Crear el arreglo con los datos de contacto
        $datos = array(
            'Nombre' => $nombre,
            'Dirección' => $direccion,
            'Teléfono' => $telefono,
            'Correo' => $correo,
            'FechaHora' => $fechaHora
        );

        // Mostrar el arreglo en pantalla
        echo "<pre>";
        print_r($datos);
        echo "</pre>";

        // Retornar el arreglo
        return $datos;
    }

    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    crearArreglo($nombre, $direccion, $telefono, $correo);
?>
