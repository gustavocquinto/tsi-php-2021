<?php

require_once('banco/conectaBD.php');
include('POO/Usuario.class.php');

$preparando = ('SELECT
                    diretorio, nomearquivo
                FROM
                    imagens'
);


$obj = new Usuario;
$obj->listarImg($bd, $preparando);


