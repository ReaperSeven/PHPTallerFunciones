<?php
    /**
     * Función para calcular la edad de una persona.
     *
     * @param string $fechaNacimiento La fecha de nacimiento en formato 'YYYY-MM-DD'.
     * @return array Un array con la edad calculada y un indicador de si ya cumplió años en el año actual.
     */
    function calcularEdad($fechaNacimiento) {
        // Obtener el año actual
        $anioActual = date('Y');
        
        // Extraer el año de la fecha de nacimiento
        $anioNacimiento = date('Y', strtotime($fechaNacimiento));

        // Calcular la edad
        $edad = $anioActual - $anioNacimiento;

        // Verificar si ya cumplió años en el año actual
        $cumplioAnios = false;
        if (date('md') >= date('md', strtotime($fechaNacimiento))) {
            $cumplioAnios = true;
        }

        // Retornar la edad y si ya cumplió años en el año actual
        return array('edad' => $edad, 'cumplioAnios' => $cumplioAnios);
    }

    // Capturar datos del formulario
    $fechaNacimiento = $_POST['fechaNacimiento'];

    // Calcular la edad
    $datosEdad = calcularEdad($fechaNacimiento);

    // Mostrar el resultado
    if ($datosEdad['cumplioAnios']) {
        echo "Tienes " . $datosEdad['edad'] . " años";
    } else {
        echo "Vas a cumplir " . $datosEdad['edad'] . " años.";
    }
?>
