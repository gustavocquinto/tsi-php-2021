<?php

$despesas['mercado'] = 345.55;
$despesas['estacionamento'] = 135.00;
$despesas['alimentacao'] = 600.00;
$despesas['bar'] = 900.00;
$despesas['educacao'] = 400.00;

$despesas2['0'] = 345.55;
$despesas2['1'] = 135.00;
$despesas2['2'] = 600.00;
$despesas2['3'] = 900.00;
$despesas2['4'] = 400.00;

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

include 'link.html';

$gradetsi["segunda"] = 'P.i';
$gradetsi["terça"] = 'CMS e Direito Digital';
$gradetsi["quarta"] = 'Banco de Dados';
$gradetsi["quinta"] = 'Linguagens de servidor';
$gradetsi["sexta"] = 'Linguagem script para web';

foreach ($gradetsi as $dia => $matéria){
    echo "A aula de $dia é $matéria <br>";
}

echo "<pre>"; // serve para nao aplicar a formatação de texto, por exemplo: Sem isso, caso coloque um código de programação, ele não ficará identado e sim tudo em uma única linha. FEIO.

var_dump($gradetsi); //ótimo para depurar o código. Neste caso mostra o array e suas atribuições.

echo "/<pre>"; // Encerra o pre.