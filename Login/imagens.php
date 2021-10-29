<?php

require_once('banco/conectaBD.php');

if(mime_content_type($_FILES['imagem']['tmp_name']) == 'image/jpeg'){

    $arquivo = $_FILES['imagem']['tmp_name'];
    $diretorio = 'arquivosRecebidos/';
    $novonome = uniqid().'.jpeg';
    $random = rand(1,9999999999);
    move_uploaded_file($arquivo, $diretorio.$novonome);
                          
    $preparando = $bd -> prepare ('INSERT INTO 
                    imagens (usuario, nomearquivo, diretorio)
                   VALUES
                   (:usuario, :nomearquivo, :diretorio)');

    $valores[':usuario'] = $_POST['email'];
    $valores[':nomearquivo'] = $_FILES['imagem']['name'];
    $valores[':diretorio'] = $diretorio.$novonome;
    
    if ($preparando -> execute($valores)){
        echo 'Imagem enviada para o banco com sucesso <br>';
    }
    else{
        echo 'Algo deu errado';
    }
}