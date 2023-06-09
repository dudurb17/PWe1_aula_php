<?php 
     include "../DB_class.php";
    $conn= new BD();
    $load = $conn->select();
    if (!empty($_GET['id'])) {
        $conn->deletar($_GET['id']);
        header("Location: formularioList.php");
    }
    


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="container">
            <h1>Listagem dos dados</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">cpf</th>
                        <th scope="col">idade</th>
                        <th scope="col">ações</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <form action="formularioList.php" method="get">
                        <?php
            foreach ($load as $item) {
                echo "<tr>";
                echo "<td>".$item->id."</td>";
                echo "<td>" . $item->name . "</td>";
                echo "<td>" . $item->cpf . "</td>";
                echo "<td>" . $item->idade . "</td>";
                echo "<td><a href='formularioFrom.php?id=$item->id'>editar</a> <a href='formularioList.php?id=$item->id' onclick='return confirm(\"Deseja excluir\")'>Deletar</a></td>";
                echo "<tr>";
            }
            ?>
                    </form>

            </table>
        </div>
        <input type="button" value="voltar" onclick="window.location.href = 'formularioFrom.php'">
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>