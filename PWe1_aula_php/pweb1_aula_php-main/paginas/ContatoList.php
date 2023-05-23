<?php
include "../BD.class.php";

$conn = new BD();


if (!empty($_GET['id'])) {
    $conn->deletar($_GET['id']);
    header("Location: ContatoList.php");
}

    if (!empty($_POST)){
        $load = $conn->pesquisar($_POST);
    }else{
        $load = $conn->select();
    
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
    <form action="ContatoList.php" method="post">
        <select name="campo">
            <option value="nome">Nome</option>
            <option value="telefone">Telefone</option>
            <option value="email">Email</option>
        </select>
        <label>Valor</label>
        <input type="text" name="valor">
        <button type="submit">Buscar</button>

        <a href="ContatoForm.php">Cadastrar</a><br><br>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
            </tr>
            <?php
        foreach ($load as $item) {
            echo "<tr>";
            echo "<td>" . $item->nome . "</td>";
            echo "<td>" . $item->telefone . "</td>";
            echo "<td>" . $item->email . "</td>";
            echo "<td><a href='ContatoForm.php?id=$item->id'>editar</a></td>";
            echo "<td><a href='ContatoList.php?id=$item->id' onclick='return confirm(\"Deseja excluir\")'>Deletar</a></td>";
            echo "<tr>";
        }
        ?>
        </table>
    </form>


</body>

</html>