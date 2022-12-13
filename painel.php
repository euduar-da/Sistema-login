<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    Wellcome to the Dashboard,?php echo $_SESSION['username']; ?>.
    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>

