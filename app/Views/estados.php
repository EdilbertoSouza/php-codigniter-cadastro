<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Estados</title>
</head>
<body>
    <div class="container mt-5">
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>UF</th>
            </tr>
            <?php foreach ($estados as $estado) : ?>
                <tr>
                    <td><?php echo $estado['id'] ?></td>
                    <td><?php echo $estado['nome'] ?></td>
                    <td><?php echo $estado['uf'] ?></td>
                    <td>Ações</td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>