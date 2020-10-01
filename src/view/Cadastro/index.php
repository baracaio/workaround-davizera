<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela</title>
</head>
<body>
    <h1>Olá, <?php echo $nome; ?></h1>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Sobrenome</td>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($resultados)) {
                foreach ($resultados as $res) {
                ?>
                <tr>
                    <td>
                        <?php echo $res['id']; ?>
                    </td>
                    <td>
                        <?php echo $res['nome']; ?>
                    </td>
                    <td>
                        <?php echo $res['sobrenome']; ?>
                    </td>
                </tr>
                <?php
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>