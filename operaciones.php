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
        $total = $numero1 / $numero2;
        break;
    default:
        $total = "no valido";
        break;
}
echo $total;