<?php

session_start();

if (!isset($_SESSION['nome'])){
    echo 'Faça o login antes';
    exit();
}
