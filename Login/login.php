<?php

session_start();
//Conectando ao banco
require_once('banco/conectaBD.php');

//Preparando a consulta

$stmt = $bd -> prepare('SELECT
                        nome, senha
                        FROM
                        usuarios
                        WHERE
                        email = :email');

//Executando a consulta e pegando retorno dela
$stmt -> execute([':email' => $_POST['email']]);

//Aqui guardamos na variavel REGISTRO o retorno dessa consulta acima, usando o fetch. O fetch retorna um array com os nomes das colunas...
//...depois de ter executado o $stmt, por exemplo, ficaria assim: REGISTRO['NOME']
$registro = $stmt -> fetch(PDO::FETCH_ASSOC);


//Se retornar um boleano falso cai no ultimo else. Caso retorne true faz a verificação utilizando a função password_verify
//Pois nós criptografamos antes utilizando o password_hash("variavel ou senha", PASSWORD_DEFAULT);

if($registro){
    //pega a entrada do usuario no array POST, index senha, a propria funçao ja compara com o registro (variavel que recebeu o fetch)
    if (password_verify($_POST['senha'], $registro['senha'])){
        echo '<a href="listarBD.php">Menu</a> <br>';
        $_SESSION['nome'] = $registro['nome'];

        echo '<a href="logout.php"> LogOut</a>';

    }
    else{
        echo 'Credenciais inválidas';
        session_destroy();
    }
}
else{
    echo 'Credencias inválidas';
    session_destroy();
}