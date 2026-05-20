<?php
$Nombre = $_POST ['empleado'];
$Horas = $_POST ['horas'];
$Pago = $_POST ['pago'];

$Salario_Mensual = ($Horas * $Pago);
echo "<center>";
echo "<h1> Salario del empleado $Nombre </h1>";
echo "<br><br>";
echo "El nombre del empleado es: ". $Nombre;
echo"<br><br>";
echo "La cantidad de horas trabajadas del empleado son de: " . $Horas;
echo "<br><br>";
echo "El salario calculado del empleado $Nombre es de: " . $Salario_Mensual;
echo "</center>";

?>