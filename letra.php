<?php
$letra = $_POST ['letra'];
$cantidad_letras = strlen($letra);
echo "La palabra '" . $letra . "' contiene " . $cantidad_letras . " letras.";
?>