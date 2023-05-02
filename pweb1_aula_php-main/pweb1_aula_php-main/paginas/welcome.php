<?php
include "db_conn.php";
if (isset($_GET["submit"])) {
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $telefone = $_GET["telefone"];
    $sql_insert = "INSERT INTO `usuario`(`id`, `nome`, `telefone`, `email`) VALUES ('null',' $nome','$telefone','$email')";
    $sql_query = mysqli_query($conn, $sql_insert);
}

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

    Nome:<?php echo $_GET['nome']; ?>
    Email:<?php echo $_GET['email']; ?>
    Telefone:<?php echo $_GET['telefone']; ?>

    <input type="submit" name="submit" value="Mostrar todos" onclick="window.location='mostrar.php';">

</body>

</html>