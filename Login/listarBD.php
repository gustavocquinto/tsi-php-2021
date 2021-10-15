<?php
require_once('banco/conectaBD.php');
require_once('sessao/confirmaLogin.php');

$sql = 'SELECT 
            nome, email, id
        FROM 
            usuarios';


echo '<form action="apagar.php" method="post">
        <table border="1">
            <tr>
                <td> Nome </td> <td> Email </td>
            </tr>';


foreach ($bd -> query($sql) as $registro){
    echo "<tr>
            <td>{$registro['nome']}</td>
            <td>{$registro['email']}</td>
            <td> <button type='submit' name='id' value='{$registro['id']}'> X </button>
          </tr>  ";
            
}

echo '  </table
      </form>';