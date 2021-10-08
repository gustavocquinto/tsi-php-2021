<?php
session_start();
$bd_bsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO ($bd_bsn, $bd_user, $bd_pass);

if( !isset($_SESSION['nome'])){
    echo 'Usuário não logado';
    exit();
}

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