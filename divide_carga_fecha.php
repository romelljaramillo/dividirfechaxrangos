<?php

$fecha = '20-01-2020';
$fecha = date("d-m-Y", strtotime($fecha));

$cantidad = 510000;
$carga_max = 250000;
$ciclos = 1;

if($cantidad > $carga_max){
    $ciclos = round($cantidad / $carga_max, 0);
    if(($cantidad / $ciclos) > $carga_max){
        $ciclos =  $ciclos + 1;
    }
    echo $ciclos. "<br>";
} 

$rango_horas = round(24 / $ciclos, 0);
$hora_fin = $rango_horas - 1;
$hora_inicio = 00;

for ($i = 1; $i <= $ciclos; $i++){
    echo  "<br>";

    $fecha_inicio = $fecha . ' ' . $hora_inicio . ':00:00';
    $fecha_fin = $fecha . ' ' . $hora_fin . ':59:59';

    $fecha_inicio = date("d-m-Y H:i:s", strtotime($fecha_inicio));
    $fecha_fin = date("d-m-Y H:i:s", strtotime($fecha_fin));
   
    $hora_inicio = $hora_fin + 1;
    $hora_fin = $hora_fin + $rango_horas;

    echo  $fecha_inicio. "<br>";
    echo  $fecha_fin. "<br>";
    echo '---------------------------';
}
