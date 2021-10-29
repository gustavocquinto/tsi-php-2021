<?php

require_once('banco/conectaBD.php');


$preparando = ('SELECT
                    diretorio
                FROM
                    imagens'
);

foreach($bd -> query($preparando) as $coluna){
    echo"<img src='{$coluna['diretorio']}'><br>";
}

