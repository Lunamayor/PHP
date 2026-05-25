<?php
$contador = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
        $contador++;
    }
}
echo "Múltiplos de 3: $contador\n";
?>