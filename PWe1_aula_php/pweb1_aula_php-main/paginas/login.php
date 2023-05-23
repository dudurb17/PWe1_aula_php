<?php 

if(!empty($_POST)){
    session_start();

}elseif(!empty($_GET['sair'])){
    
}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h3>Sistema Academico</h3>
    <form action="login.php" method="post">
        <label for="">Login</label>
        <input type="text" name="login" id="" />
        <label for="">Senha</label>
        <input type="password" name="senha" id="" />
        <button type="submit">Logar</button>

    </form>

</body>

</html>