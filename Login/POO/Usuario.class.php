<?php


class Usuario {
    var $nome;
    var $idade;
    var $uid;

    function addUser($teste){
        $this->nome = $teste;

        echo 'Testando o ' . $this->nome;
    }

}