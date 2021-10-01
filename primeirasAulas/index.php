<?php

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

//BOM PARA DEBUG

$nome = 'Gustavo Quinto';
$nome2 = 'Teste';

echo "Olá, $nome <br>";

echo "Olá, $nome <br>";
//echo é como se fosse um print.

if ($nome == 'Gustavo'){
    echo "O nome é $nome2";
}

else {
    echo "O nome não é igual <br> ";
}

for($i = 0; $i < 10; $i++){
    echo '2 x ' . $i . ' = ' . (2 * $i) . '<br>';
}

include 'link.html'; // Se não existir

require 'link.html';

include_once 'link.html';

require_once 'link.html';