<?php

$despesas['mercado'] = 345.55;
$despesas['estacionamento'] = 135.00;
$despesas['alimentacao'] = 600.00;
$despesas['bar'] = 900.00;
$despesas['educacao'] = 400.00;

/*unset($despesas); SERVE PARA DESTRUIR O VETOR. SERVE PRA TUDO*/


foreach ($despesas as $nome /*variavel q se refere ao indice. poderia ser qualquer nome*/ => $valor /* variavel q se refere ao valor dentro*/) {

    echo "$nome: R$ " . number_format($valor, 2, ',', '.') . "<br>";
}

$semana['segunda'] = 'Estudo';
$semana['terça'] = 'Durmo';
$semana['quarta'] = 'Ando de Skate';
$semana['quinta'] = 'Estudo';
$semana['sexta'] = 'Saio com a familia';

foreach ($semana as $nomedia => $oquefaco) {
    echo "Na $nomedia eu $oquefaco <br>";
}