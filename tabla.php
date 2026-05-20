<?php
$numero = $_POST['numero'];
if ($numero >= 1 && $numero <= 10) {
echo "<h1>Tabla del $numero</h1>";
    for ($i = 1; $i <= 10; $i++) {
        echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
    }
} else {
    echo "Error: Solo se permiten números del 1 al 10.";
}
?>