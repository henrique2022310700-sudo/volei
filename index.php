<!DOCTYPE html>
<html>
<head>
    <title>Upload Simples</title>
</head>

<body>
    <h1> Enviar Arquivo</h1>
    
    <form action="uploa.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <br>
        <button type="submit">Enviar </button>
    </form>
</body>
</html>