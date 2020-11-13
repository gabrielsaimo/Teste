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
<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test de nada</title>
</head>
<body>
    
</body>
</html>