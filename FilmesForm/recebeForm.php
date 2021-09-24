<?php

if (empty($_POST['nome']) || empty($_POST['dataa'])){
    die('Parece que você não inseriu os dados corretamente.');
}

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

$stmt = $bd -> prepare('INSERT filme (nome, dataa)
                       VALUE (:nome, :dataa)');

$enviar[':nome'] = $_POST['nome'];
$enviar[':dataa'] = $_POST['dataa'];

if ($stmt -> execute($enviar)){
    echo '<script> alert("Dados enviados com sucesso.") </script>';
}
else{
    echo '<script> alert("Algo deu errado.") </script>';
}