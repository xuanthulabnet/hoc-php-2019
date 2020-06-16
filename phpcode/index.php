<?php

$a = 10;
$b = 20;

function Ham(&$x, &$y) {
    echo "x = $x, y = $y", PHP_EOL;
    $x = 1;
    $y = 2;
};
Ham($a, $b);

echo "a = $a, b = $b", PHP_EOL;  // a = 10, b = 20


?>