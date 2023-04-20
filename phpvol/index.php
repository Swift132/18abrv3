<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>PHP TEST</title>
</head>
<body>
    <h2>Registar</h2>
    <form action="registar.php" method="post">

        <label for="user">User:</label>
        <input type="text" id="user" name="user" required><br><br>

        <label for="pass">Senha:</label>
        <input type="password" id="pass" name="pass" required><br><br>

        <input type="submit" value="Enviar" class="btn btn-main1">
    </form>
    <hr>
</form>
<a href="http://localhost:80/login.php" target="_blank" class="btn btn-main1">login</a>
</body>
</html>