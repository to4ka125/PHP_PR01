<?php
function task1($V,$U,$T1,$T2){
    $S1 = $V * $T1;
    $S2 = ($V - $U) * $T2; 
    $S = $S1 + $S2;
    return $S;
}

$V=10;
$U=5;

$T1=4;
$T2=2;

?>