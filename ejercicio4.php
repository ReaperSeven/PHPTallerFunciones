<?php
    /**
     * Función que calcula el pago quincenal de un empleado.
     *
     * @param string $adelantos Indica si el empleado tiene adelantos. Puede ser "si" o "no".
     * @param float $descontar El monto a descontar si el empleado tiene adelantos. Por defecto es 0.
     * @return float El monto del pago quincenal del empleado.
     */
    function calcularPagoQuincenal($adelantos, $descontar = 0) {
        $salarioMinimoMensual = 1300000;
        $subsidioTransporte = 106454;
        $descuentoSeguridadSocial = 0.08;

        // Calcular el salario base quincenal
        $salarioBaseQuincenal = ($salarioMinimoMensual / 2) + $subsidioTransporte;

        // Calcular el descuento por seguridad social
        $descuentoSeguridadSocial = $salarioBaseQuincenal * $descuentoSeguridadSocial;

        // Aplicar descuentos adicionales si el empleado tiene adelantos
        if ($adelantos == "si") {
            $salarioBaseQuincenal -= $descontar;
        }

        // Calcular el pago quincenal final
        $pagoQuincenal = $salarioBaseQuincenal - $descuentoSeguridadSocial;

        // Retornar el pago quincenal
        return $pagoQuincenal;
    }

    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $adelantos = $_POST['adelantos'];
    $descontar = $_POST['descontar']; 

    // Calcular el pago quincenal
    $pagoQuincenal = calcularPagoQuincenal($adelantos, $descontar);

    // Mostrar el resultado
    echo "$nombre, su salario quincenal es de ".$pagoQuincenal;
?>
