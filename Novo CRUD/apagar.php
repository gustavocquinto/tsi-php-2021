<?php

$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

$preparando = $bd -> prepare ('DELETE FROM
                                colegas
                               WHERE
                                id = :id ');

if ($preparando -> execute([':id' => $_POST['id']])){
    header ('Location: listarBD.php?sucess');
}

else{
    header ('Location: listarBD.php?error');
}