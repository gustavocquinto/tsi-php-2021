<?php

if ($_FILES){

    if (mime_content_type($_FILES['file']['tmp_name']) == 'image/jpeg'){
    //funçao do php para mover arquivos, recebe no array files, pega o nome temporário 'tmp_name'. E __DIR__ constante mágica que move para tal diretório, e também o arquivo ja vai com um nome aleátorio
    move_uploaded_file($_FILES['file']['tmp_name'], 
                        __DIR__ . '/arquivosRecebidos/' . rand(1,99999999999999) . 'user.file');

    echo "Arquivo {$_FILES['file']['name']} recebido com sucesso! <br> <br>";
    }
    else {
        echo ("Tipo de arquivo não aceito!");
    }
}


include ('formUpload.php');