<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Ola <?php echo $_SESSION['login']?>, seja bem vindo.
    <a href="ContatoList.php">Ir para Contato List</a>
</body>

</html>