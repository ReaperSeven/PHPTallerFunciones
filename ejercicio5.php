<?php
    /**
     * Función que calcula la fecha de inicio de las prácticas sumando 1 mes a la fecha de inicio de la formación lectiva.
     *
     * @param string $inicioFormacion La fecha de inicio de la formación lectiva en formato "YYYY-MM-DD".
     * @return string La fecha de inicio de las prácticas en formato "YYYY-MM-DD".
     */
    function calcularFechaPracticas($inicioFormacion) {
        // Calcular la fecha de inicio de las prácticas sumando 1 mes a la fecha de inicio de la formación lectiva
        $inicioPracticas = date("Y-m-d", strtotime($inicioFormacion . "+ 1 month"));
        
        // Retornar la fecha de inicio de las prácticas
        return $inicioPracticas;
    }

    // Obtener la fecha de inicio de la formación lectiva del formulario
    $inicioFormacion = $_POST['inicioFormacion'];

    // Calcular la fecha de inicio de las prácticas
    $inicioPracticas = calcularFechaPracticas($inicioFormacion);

    // Mostrar la fecha de inicio de las prácticas en la pantalla
    echo "La fecha de inicio de las prácticas es: " . $inicioPracticas;
?>
