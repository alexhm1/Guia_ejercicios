<?php
$dolar = $_POST ['dolar'];
$cambio = 0.86; 
$euros = $dolar * $cambio;
echo  $euros . " Euros.";
?>