<?php
//dados para ficar mais facil de conectar ao banco.
$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';


//CONECTANDO NO BANCO VVVV
$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

$stmt = $bd->prepare('INSERT disciplinas (nome, professor, dia, descricao, end_ip)
                      VALUES (:nome, :professor, :dia, :descricao, :end_ip)');

//$stmt->execute(:nome => $_POST['nome'], :professor => $_POST['professor'], :dia => $_POST['dia'], :descricao => $_POST['descricao']);

$valores[':nome'] = $_POST['nome'];
$valores[':professor'] = $_POST['professor'];
$valores[':dia'] = $_POST['dia'];
$valores[':descricao'] = $_POST['descricao'];
$valores[':end_ip'] = $_SERVER['REMOTE_ADDR'];

if ($stmt -> execute($valores)){
    echo'<script> alert("Dados coletados com sucesso.") </script>';
}
else{
    echo'<script> alert("Algo deu errado.") </script>';
}

// -> trabalha com objetos. => indice dps valor



