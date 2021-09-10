<?php

echo 'O nome da disciplina é ' . $_POST['disciplina'] . ', nome do professor é ' . $_POST['professor'] . ' e o dia da disciplina é ' . $_POST['dia'] . '. <br>';
echo 'Descrição: ' . $_POST['descricao'];

//Abro o arquivo para gravar mais coisas nele
$arquivo = fopen ('bancodedados.csv' , 'a');

//Escrevo no arquivo

fwrite( $arquivo, $_POST['disciplina'] . ';' . $_POST['professor'] . ';' . $_POST['dia'] . ';' . $_POST['descricao'] . "\r\n");

//Fecho o arquivo

fclose($arquivo);


