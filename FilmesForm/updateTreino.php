<?php
$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$novo_nome = 'Não é mais titanic';
$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

//preparei o que vou fazer no banco de dados, falei o que vou fazer e guardei em uma variavel

$preparada = $bd -> prepare ('UPDATE filme 
                 SET nome = :nome 
                 WHERE id = 1');

//Peguei essa variavel porque estou evitando SQL Injection
$enviar[':nome'] = $novo_nome;

if ($preparada -> execute($enviar)){
    echo '<script> alert("Deu tudo certo") </script>';
}

else {
    echo '<script> alert("Deu tudo errado") </script>';
}