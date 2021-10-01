<?php
    $email = 'teste@teste.com';
    $password = 'teste123';

    if($_POST['email'] == $email && $_POST['password'] == $password){
        echo 'Usuário logado';
    }
    else {
        echo 'Email ou senha incorretos.';
    }