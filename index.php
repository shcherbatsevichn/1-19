<?php 
error_reporting(-1);
// Найти наименьшее общее кратное  (НОК)  двух натуральных чисел N и M.
$n = 16;
$m = 20;

echo ("НОК({$n}, {$m}) = ".nok($n, $m).";<br>");
    
  
function nok($n, $m){
    $nok = (abs($n*$m))/nod($n, $m);
    return $nok;
   
}

function nod($n, $m){
    $nodn = 0;
    $nodm = 0;
    for($i = 1; $i < $m; $i++){
        if($n % $i == 0){
            $nodn = $i;
        }
        if($m % $i == 0){
            $nodm = $i;
        }
        if ($nodn == $nodm){
            $nod = $nodn;
        }
    } 
    return $nod;
}   