<?php
$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$subtotal = $cantidad * $precio;
$total = $subtotal; 
echo "Cliente: " . $cliente . "<br>";
echo "Producto: " . $producto . "<br>";
echo "Cantidad: " . $cantidad . " Precio Unitario: $" . $precio . "<br>";
echo "Subtotal: $" . $subtotal . "<br>";
echo "Total a pagar: $" . $total;
?>