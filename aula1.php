<?php

$valoiAtual = 0;
$valoiFinal = 80;
$paradas = array(30,50,70);

do{
    echo "\n$valoiAtual";
    if (in_array ($valoiAtual,$paradas)){
        echo "\nsua parada é aki? $valoiAtual";
    }
    $valoiAtual++;
}while($valoiAtual <= $valoiFinal);
        echo "\nfinal ";
?>