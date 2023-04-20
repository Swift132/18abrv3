<!DOCTYPE html>
<html>
<head>
	<title>Inserido</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h2>Inserido</h2>
    <a href="http://localhost:80" target="_blank" class="btn btn-main1">Main Page</a>
    <?php

    $servername = "db";
    $username   = "root";
    $password   = "xpto";
    $dbname     = "xpto";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Não foi possivel fazer-se a conexão:" . mysqli_connect_error());
    }

    $user = mysqli_real_escape_string($conn, $_REQUEST['user']);
    $pass = mysqli_real_escape_string($conn, $_REQUEST['pass']);

    $sql = "INSERT INTO data (user, pass)
            VALUES ('$user', '$pass')";
    if (mysqli_query($conn, $sql)) {
        echo "Dados enviados com sucesso";
    } else {
        echo "Os dados nao foram enviados com sucesso";
    }

    mysqli_close($conn);
    ?>
</html>
