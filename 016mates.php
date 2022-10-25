<?php
/*: Genera un array aleatorio de 33 elementos con números 
comprendidos entre el 0 y 100 y calcula: El mayor, el menor y la media.*/

$array =[];

for ($i=0; $i <33 ; $i++) { 
    $array[$i] = rand(0,100);
}

echo max($array)."<br/>";
echo min($array)."<br/>";
echo array_sum($array)/count($array);

?>