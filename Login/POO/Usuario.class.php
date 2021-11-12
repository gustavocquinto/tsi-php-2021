<?php


class Usuario {
    var $nome;
    var $idade;
    var $uid;

    function listarUser($bd, $sql) {
        foreach ($bd -> query($sql) as $registro){
            echo "<tr>
                    <td>{$registro['nome']}</td>
                    <td>{$registro['email']}</td>
                    <td> <button type='submit' name='id' value='{$registro['id']}'> X </button>
                  </tr>  ";
                    
        }
    }

    function listarImg($bd, $sql) {
        foreach ($bd -> query($sql) as $registro){
            echo "<tr>
                    <td>{$registro['nomearquivo']}</td>
                    <td><img src='{$registro['diretorio']}'></td>
                     
                  </tr>";
                    
        }
    }

}