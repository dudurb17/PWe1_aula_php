<?php 

if(!empty($_POST)){
    session_start();
    $_SESSION["login"]=$_POST["login"];
    $_SESSION["senha"]=$_POST["senha"];
    if($_SESSION["login"]=="admin" && $_SESSION["senha"]=="123"){
        header("Location:main.php");
    }
    else{
        header("location:login.php?msg=Erro");
    }


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
        </br>
        <label for="">Senha</label>
        <input type="password" name="senha" id="" />
        </br>
        <button type="submit">Logar</button>

    </form>

</body>

</html>