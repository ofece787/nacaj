<?php 
    include 'dados_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/financas_css.php">
    <link rel="stylesheet" href="css/style.php">
</head>
<body>

    <main>
        <section>
            <div class="volta">
                <div class="s-voltar">
                    <a href="../index.php">
                        <div class="botao">
                            <img src="../imagens/backarrow.png" class="voltar" alt="">
                        </div>
                    </a>
                </div>
            </div>
        <h2>Tabela Financeira</h2>
            <section class="second">
                <table>
                    <thead>
                        <th>
                            <tr>
                                <td>Nome</td>
                                <td>Janeiro</td>
                                <td>Fevereiro</td>
                                <td>Marco</td>
                                <td>Abril</td>
                                <td>Maio</td>
                                <td>Junho</td>
                                <td>Julho</td>
                                <td>Agosto</td>
                                <td>Setembro</td>
                                <td>Outubro</td>
                                <td>Novembro</td>
                                <td>Dezembro</td>
                                <td>Total</td>
                            </tr>
                        </th>
                    </thead>
                    <tbody>
                    <?php
                        $display = new UserView();
                        $display->getUsersNoUp();
                    ?>
                    </tbody>
                </table>
                <a href="atualizar_financas.php">Atualizar</a>
            </section>
        </section>
    </main>
    
</body>
</html>