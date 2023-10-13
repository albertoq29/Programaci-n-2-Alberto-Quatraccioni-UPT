<?php
require_once 'ConversorMoneda.php';

$tasaCambio = 34.84;
$conversor = new ConversorMoneda($tasaCambio);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$montoEnBolivares = $_POST["monto"];
$montoEnDolares = $conversor->convertirADolares($montoEnBolivares);

echo "El monto en dólares es: " . number_format($montoEnDolares, 2);
}
?>
