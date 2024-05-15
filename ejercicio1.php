<?php 
	
	function calculadora($termino1, $termino2, $operaciones){

		$resultado = 0;
		
		if ($operaciones == "suma") {
			$resultado = $termino1 + $termino2;
			echo "$termino1 + $termino2 = $resultado";
		} elseif ($operaciones == "resta") {
			$resultado = $termino1 - $termino2;
			echo "$termino1 - $termino2 = $resultado";
		} elseif ($operaciones == "multiplicacion") {
			$resultado = $termino1 * $termino2;
			echo "$termino1 * $termino2 = $resultado";
		} elseif ($operaciones == "division") {
			if ($termino2 <= 0) {
				echo "No se puede dividir por 0 o negativos";
			} else {
				$resultado = $termino1 / $termino2;
				echo "$termino1 / $termino2 = $resultado";
			}
		} elseif ($operaciones == "porcentaje") {
			$resultado = ($termino2 / 100) * $termino1;
			echo "El $termino2 por ciento de $termino1 es de $resultado";
		} elseif ($operaciones == "potencia") {
			$resultado = pow($termino1, $termino2);
			echo "$termino1^$termino2 = $resultado";
		} elseif ($operaciones == "raiz") {
			$resultado = sqrt($termino1);
			echo "La raiz cuadrada de $termino1 es $resultado <br>";
			$resultado = sqrt($termino2);
			echo "La raiz cuadrada de $termino2 es $resultado";
		}
	}

	$termino1 = $_POST['termino1'];
	$termino2 = $_POST['termino2'];
	$operaciones = $_POST['operaciones'];

	// Llama a la función calculadora
	calculadora($termino1, $termino2, $operaciones);

?>
