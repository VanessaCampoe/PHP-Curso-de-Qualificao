<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <h1>Envie seu arquivo</h1>
    <form action="upload_validando.php" method="post" enctype="multipart/form-data">
        
    <input type="file" name="arquivo" required>
        
    <button type="submit">Enviar</button>
    </form>
</body>
</html>