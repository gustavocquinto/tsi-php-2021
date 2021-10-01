<form method="post" action="Apagar.php">
        <h4> Digite o iddo filme que deseja apagar </h4>
        <input type="text" placeholder="Titanic" name="id">
        <input type="submit" value="Apagar">
    </form>


<?php
$bd_dsn = 'mysql:host=localhost;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

$sql = 'SELECT 
            id, nome, dataa
        FROM
            filme';

echo '<form action="apagar.php" method="post">
        <table border="1">
            <tr>
                <td> Nome </td> <td> Data </td>
            </tr>';

foreach ($bd -> query($sql) as $registro){
    echo "
        <tr>
            <td> {$registro['nome']} </td> 
            <td> {$registro['dataa']} </td>
            <td> <button name='apagar' value='{$registro['id']}'> X </button> </td>
        </tr>";
    echo "<br>";
}

echo '</table>
        </form>';