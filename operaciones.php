<?php
$numero1 = $_GET["n1"];
$numero2 = $_GET["n2"];
$operacion = $_GET["operacion"];
switch ($operacion) {
    case 'suma':
        $total = $numero1 + $numero2;
        break;
    case 'resta':
        $total = $numero1 - $numero2;
        break;
    case 'multiplicacion':
        $total = $numero1 * $numero2;
        break;
    case 'division':
        if ($numero1 == 0 || $numero2 == 0) {
            $total = "no se puede dividir por cero";
        }else {
            $total = $numero1 / $numero2;    
        }
        
        break;
    default:
        $total = "no valido";
        break;
}
echo $total;