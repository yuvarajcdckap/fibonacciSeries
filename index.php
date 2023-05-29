<?php

function fibonacciSeries($num){
$num1=0;
$num2=1;
for ($i=0; $i <=$num ; $i++) { 
        $final=$num1+$num2;
        $num1=$num2;
        $num2=$final;
    echo $final."\n";
}

}
fibonacciSeries(10);
?>