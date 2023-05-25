<?php 
 include "../DB_class.php";
 $conn= new BD();
 if(isset($_POST['submit'])){
        $conn->inserir($_POST);
    
 }
 header('Location:formularioList.php');
 
 
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>teste</title>
</head>

<body>
    <main>
        <h1>Cadastro simples</h1>
        <form action="formularioFrom.php" method="post">
            <label for="">Informe seu nome:</label>
            <input type="text" name="name" required>
            <label for="">informe seu cpf:</label>
            <input type="text" name="cpf" id="" required />
            <label for="">Informe sua idade</label>
            <input type="number" name="idade" id="" required>
            <input type="submit" value="usuario" name="submit" />

        </form>
    </main>
</body>

</html>