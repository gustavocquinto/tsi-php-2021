<?php

$bd_dsn = 'mysql:host=;port=3306;dbname=ling_serv';
$bd_user = 'root';
$bd_pass = '';

$bd = new PDO($bd_dsn, $bd_user, $bd_pass);

if(mime_content_type($_FILES['imagem']['tmp_name']) == 'image/jpeg'){

    $random = rand(1,9999999999);
    $enviou = move_uploaded_file($_FILES['imagem']['tmp_name'], 
                                __DIR__ . '/arquivosRecebidos/' . $random . 'userimage.file');
                          
    $preparando = $bd -> prepare ('INSERT INTO 
                    imagens (usuario, nomearquivo, diretorio)
                   VALUES
                   (:usuario, :nomearquivo, :diretorio)');

    $valores[':usuario'] = $_POST['email'];
    $valores[':nomearquivo'] = $_FILES['imagem']['name'];
    $valores[':diretorio'] = '/arquivosRecebidos/' . $random . 'userimage.file';
    
    if ($preparando -> execute($valores)){
        echo 'Imagem enviada para o banco com sucesso';
    }
    else{
        echo 'Algo deu errado';
    }
}