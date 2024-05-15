<?php
    /**
     * Función que crea un arreglo con los datos de contacto de un usuario.
     *
     * @param string $nombre El nombre del usuario.
     * @param string $direccion La dirección del usuario.
     * @param string $telefono El teléfono del usuario.
     * @param string $correo El correo electrónico del usuario.
     * @return array El arreglo con los datos de contacto, incluyendo la fecha y hora actuales.
     */
    function crearArreglo($nombre, $direccion, $telefono, $correo) {
        // Establecer la zona horaria
        date_default_timezone_set('America/Bogota');

        // Obtener la fecha y hora actual
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

    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    // Llamar a la función crearArreglo con los datos obtenidos del formulario
    crearArreglo($nombre, $direccion, $telefono, $correo);
?>
