<?php
/**
 *  O functie care verifica de cate ori se gaseste un numar intr-un array de numere
 *
 * */
$a = array("2", "7", "3", "2", "9", "2", "2");
$nrElementeArr = count($a);
$nrCautat = 2;


function isNumberInside($nrCautat, $a)
{
    $gasit = 1;
    $nrElementeArr = count($a);
    for ($i = 0; $i < $nrElementeArr; $i++) {
        if ($nrCautat == $a[$i]) {
            print $gasit++ . "\n";
        }
    }
}
isNumberInside(8, $a);
?>





