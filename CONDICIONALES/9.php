<?php
$a = 10; $b = 5; $c = 8;
if ($a <= $b && $a <= $c) {
    echo "El menor es: $a\n";
} elseif ($b <= $c) {
    echo "El menor es: $b\n";
} else {
    echo "El menor es: $c\n";
}
?>