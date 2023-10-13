<?php
class ConversorMoneda {
private $tasaCambio;

public function __construct($tasaCambio) {
$this->tasaCambio = $tasaCambio;
}

public function convertirADolares($montoEnBolivares) {
return $montoEnBolivares / $this->tasaCambio;
}
}
?>
