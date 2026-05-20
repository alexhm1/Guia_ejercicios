<?php
$precio = $_POST['precio'];
/* IVA del 13% */
$iva = $precio * 0.13;
$total = $precio + $iva;
echo "Precio del producto: $" . $precio . "<br>";
echo "IVA: $" . $iva . "<br>";
echo "Total a pagar: $" . $total;
?>