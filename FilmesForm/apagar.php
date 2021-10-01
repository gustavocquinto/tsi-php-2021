<?php

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

$sql = $bd->prepare('DELETE FROM filme
           WHERE id = :id');
 
/* JEITO ANTIGO DE ENVIAR PRO BANCO DE DADOS
$variavel[':id'] = $_POST['apagar'];

if ($sql -> execute($variavel)){
    echo 'Deu tudo certo';
}
else {
    echo 'Deu nada certo';
}*/

//JEITO NOVO DE SE FAZER, :id é a label definida ali em cima em sql = bd->prepare.
if ($sql -> execute([':id' => $_POST['apagar']])){
    echo 'Deu tudo certo';
}
else {
    echo 'Deu nada certo';
}



