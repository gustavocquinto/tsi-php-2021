<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload me</title>
</head>
<body>
    <div>
        <form method="post" action="index.php" enctype="multipart/form-data">
            <label for="arquivo"> Escolha seu arquivo </label>
            <br>
            <input id="arquivo" name="file" type="file"></input>
            <br>
            <br>
            <br>
            <input type="submit" value="Enviar Arquivo">
        </form>
    </div>
</body>
</html>