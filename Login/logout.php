<?php


session_start();

if (!isset($_SESSION['nome'])){
    echo 'Faça o login antes';
    exit();
}


echo 'usuário deslogado';
session_destroy();
session_unset();