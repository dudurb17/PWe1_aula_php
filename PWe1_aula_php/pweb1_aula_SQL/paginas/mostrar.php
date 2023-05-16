<?php include "db_conn.php";
$sql = "SELECT `id`, `nome`, `telefone`, `email` FROM `usuario` WHERE 1";
$result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">]
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <table class='table'>
            <thead class='table-dark'>
                <tr>
                    <th scope='col'>id</th>
                    <th scope='col'>nome</th>
                    <th scope='col'>telefone</th>
                    <th scope='col'>email</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) {
                    echo "
       
  
            <tr>
                <th scope='row'>$row[id]</th>
                <td>$row[nome]</td>
                <td>$row[telefone]</td>
                <td>$row[email]</td>
            </tr>
        
        
        ";
                } ?>
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>