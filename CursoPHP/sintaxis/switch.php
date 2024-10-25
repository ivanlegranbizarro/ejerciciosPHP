<?php
$age = 39;


switch ($age) {
    case 1:
        echo 'El bebé tiene un año';
        break;

    default:
        echo 'El bebé ya no tiene un año';
        break;
}

$mes = 'Agosto';


$resultado = match ($mes) {
    'Enero' => 'Primer mes',
    'Febrero' => 'Segundo mes',
    'Marzo' => 'Tercer mes',
    'Abril' => 'Cuarto mes',
    'Mayo' => 'Quinto mes',
    'Junio' => 'Sexto mes',
    'Julio' => 'Septimo mes',
    'Agosto' => 'Octavo mes',
    'Septiembre' => 'Noveno mes',
    'Octubre' => 'Decimo mes',
    'Noviembre' => 'Onceavo mes',
    'Diciembre' => 'Doceavo mes',
    default => 'Pon un mes válido',
};
