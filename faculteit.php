<?php

echo"welke facultijd wil je berekenen?\n";
$getal = readline ();
$total= 1;

for($i =1; $i <= $getal; $i++){
       $total = $total * $i;

    

}
echo "$total";

?>