<?php
$contador = 0;
$n = (int) readline("Ingresa un número (0 para terminar): ");
while ($n != 0) {
    $contador++;
    $n = (int) readline("Ingresa un número (0 para terminar): ");
}
echo "Ingresaste $contador números.\n";
?>