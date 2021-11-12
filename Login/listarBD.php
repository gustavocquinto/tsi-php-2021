<?php
require_once('banco/conectaBD.php');
require_once('sessao/confirmaLogin.php');
include('POO/Usuario.class.php');

$sql = 'SELECT 
            nome, email, id
        FROM 
            usuarios';


echo '<form action="apagar.php" method="post">
        <table border="1">
            <tr>
                <td> Nome </td> <td> Email </td>
            </tr>';

$obj = new Usuario;
$obj->listarUser($bd, $sql);

echo '  </table
      </form>';