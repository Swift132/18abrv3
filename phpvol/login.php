<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h2>LOGIN 1</h2>
    <a href="http://localhost:80" target="_blank" class="btn btn-main1">Main Page</a>

    <form action="done.php" method="post">

    <label for="user">User:</label>
    <input type="text" id="user" name="user" required><br><br>

    <label for="pass">Senha:</label>
    <input type="password" id="pass" name="pass" required><br><br>

    <input type="submit" value="Enviar" class="btn btn-main1">
    </form>
</html>