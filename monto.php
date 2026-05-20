<?php
$compra = $_POST['compra'];
$descuento = $compra * 0.10;
$total = $compra - $descuento;
echo "<center>";
if ($compra > 50) {
    echo "<h1>Descuento Aplicado</h1>";
    echo "Monto de compra: $" . $compra;
    echo "<br><br>";
    echo "Descuento del 10%: $" . $descuento;
    echo "<br><br>";
    echo "Total a pagar: $" . $total;
} else {
    echo "<h1>No aplica descuento</h1>";
    echo "Monto total a pagar: $" . $compra;
}
echo "</center>";
?>