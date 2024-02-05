<?php

$b = 154000;
$d = 7; 

if ($b >= 100000) {
    $d = $b * ($d/100);
    $hb = $b - $d;
}else {
    $hb = $b;
}
echo 'Andi harus bayar'  . $hb;
?>