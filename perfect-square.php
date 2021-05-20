<?php

function squares($a, $b) {
    $output = 0;
    $i = round(sqrt($a));
    while ($i<$b){
        $sq = $i*$i;
        if ($sq >= $a && $sq <= $b){ 
            $output += 1;
        }
        if ($sq > $b){
            break;
        }
        $i++;
    }
    return $output;
}
$num1 = 24;
$num2 = 49;
echo "The number of Perfect squares in the range of $num1 and $num2 is " . squares($num1, $num2);