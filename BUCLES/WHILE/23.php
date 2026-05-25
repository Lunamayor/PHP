<?php
$n = (int) readline("Ingresa un número: ");
while ($n >= 0) {
    echo "Ingresaste: $n\n";
    $n = (int) readline("Ingresa un número: ");
}
echo "Número negativo. Fin.\n";
?>