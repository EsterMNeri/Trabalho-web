<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorias</title>
    
</head>

<body>
    <div class="container">
        <h1>Lista de Categorias</h1>
        <table class="bordered striped centered highlight responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <?php foreach ($model->rows as $item) : ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['nome'] ?></td>
                    <td>
                    <td><a href="/categoria/form?id=<?= $item['id'] ?>">editar</a></td>
                <td><a href="/categoria/excluir?id=<?= $item['id'] ?>">deletar</a></td>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>