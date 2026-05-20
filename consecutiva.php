<?php
$numero = $_POST['numero'];
$suma = 0;
for ($i = 1; $i <= $numero; $i++) {
    $suma = $suma + $i;
}
echo "La suma de los numeros desde 1 hasta " . $numero . " es: " . $suma;

?>