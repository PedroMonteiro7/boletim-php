<?php

    require("./alunos.php");
    require("./funcoes-alunos.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Notas dos Alunos</title>
</head>
<body>
    <section>
        <h1>Boletim</h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Nota</th>
                <th>Situação</th>
            </tr>
            <?php
                foreach($alunos as $aluno) {
            ?>
            <tr>
                <td><?= $aluno["nome"] ?></td>
                <td><?= $aluno["idade"] ?></td>
                <td><?= $aluno["nota"] ?></td>
                <?php if ($aluno["situacao"] == "Aprovado(a)") { ?>
                    <td class="aprovado"><?= $aluno["situacao"] ?></td>    
                    <?php } else { ?>
                        <td class="reprovado"><?= $aluno["situacao"] ?></td>
                    <?php } ?>
                <!-- ou
                <td class="<?= $aluno["situacao"] == "Aprovado(a)"
                    ? "aprovado" : "reprovado" ?>">
                    <?= isset($aluno["situacao"]) ? $aluno["situacao"] : "" ?></td> -->
            </tr>
            <?php
            }
            ?>
        </table>
    </section>
</body>
</html>