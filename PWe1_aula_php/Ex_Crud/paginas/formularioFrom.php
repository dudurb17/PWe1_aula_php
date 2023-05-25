<?php 
 include "../DB_class.php";
 $conn= new BD();
 if (!empty($_POST)) {
 if (empty($_POST['id'])) {
    $conn->inserir($_POST);
} else {
    $conn->atualizar($_POST);
}
  header("Location:formularioList.php");

 }
 if (!empty($_GET['id'])) {
    $data = $conn->buscar($_GET['id']);
}
 
 
 
 
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
        <?php echo "<h1>".(!empty($data->id)? 'Atualizar Dados':'Cadastrar')."</h1>"  ?>
        <form action="formularioFrom.php" method="post">
            <input type="hidden" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?>">
            <label for="">Informe seu nome:</label>
            <input type="text" name="name" value="<?php echo (!empty($data->name) ? $data->name : "") ?>" required>
            <label for="">informe seu cpf:</label>
            <input type="text" name="cpf" id="" required value="<?php echo (!empty($data->cpf) ? $data->cpf : "") ?>" />
            <label for="">Informe sua idade</label>
            <input type="number" name="idade" id="" value="<?php echo (!empty($data->idade) ? $data->idade : "") ?>"
                required>
            <input type="submit" value="<?php echo (!empty($data->id)? 'atualizar':'cadastrar') ?>" name="submit" />

        </form>
    </main>
</body>

</html>