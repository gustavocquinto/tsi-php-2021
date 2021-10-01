<?php

$bd_bsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

//Conectando ao banco

$bd = new PDO ($bd_bsn, $bd_user, $bd_pass);

$preparando = $bd->prepare(' INSERT colegas (nome)
                             VALUE (:nome)');


if ($preparando -> execute([':nome' => $_POST['nome']])){
    echo 'Deu tudo certo';
    
}
else {
    echo 'Oh no, algo deu errado.';
}