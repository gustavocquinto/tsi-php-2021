<?php

$bd_bsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO ($bd_bsn, $bd_user, $bd_pass);

$sql = 'SELECT 
            nome, id
        FROM 
            colegas';


echo '<form action="apagar.php" method="post">
        <table border="1">
            <tr>
                <td> ID </td> <td> Nome </td>
            </tr>';


foreach ($bd -> query($sql) as $registro){
    echo "<tr>
            <td>{$registro['id']}</td>
            <td>{$registro['nome']}</td>
            <td> <button type='submit' name='id' value='{$registro['id']}'> X </button>
          </tr>  ";
            
}

echo '  </table
      </form>';