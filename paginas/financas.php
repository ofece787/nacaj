<?php 
    include_once 'dados_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associação NACAJ | Finanças</title>
    <link rel="shortcut icon" href="../imagens/logoNACAJalinhado.png" type="image/x-icon">
    <link rel="stylesheet" href="css/financas_css.php">
    <link rel="stylesheet" href="css/style.php">
    <link rel="stylesheet" href="css/painel_view_css.php">
    <link rel="stylesheet" href="css/icones.php">
    <link rel="stylesheet" href="css/mobile_style/paine_admin.php">
</head>
<body>

    <header>

        <section class="opcoes">
            <div class="logo">
                <img src="../imagens/logoNACAJalinhado.png" alt="">
                <h2>NACAJ</h2>
            </div>
            <div class="menu">
                <img src="../imagens/humburguer.png" class="icone" alt="">
            </div>
            <div class="lista active">
                <a href="" class="selected"><img src="../imagens/userLogo.png" class="icone" alt=""><span>T, Financeira</span></a>
                <a href="atualizar_financas.php"><img src="../imagens/userLogo.png" class="icone" alt=""><span>A. Financeira</span></a>
            </div>
        </section>
        <section class="p-desk">
            <a href="" class="selected membros"><div class="icone"><img src="../imagens/userlogo.png" class="icone" alt=""></div><span>T. Financeira</span></a>
            <a href="atualizar_financas.php" class="not_selected comunitarios"><div><div class="icone"><img src="../imagens/userLogo.png" class="icone" alt=""></div></div><span>A. Financeira</span></a>
        </section>
    </header>

    <main>
        <section>
            <div class="cadastrar radius">
                <div class="volta">
                    <div class="s-voltar">
                        <a href="../index.php">
                            <div class="botao">
                                <img src="../imagens/backarrow.png" class="icone" alt="">
                            </div>
                        </a>
                        <a href="">
                            <p class="logado" title="<?php echo ucfirst($_SESSION['usuario']);
                            ?>"><?php echo ucfirst($_SESSION['usuario']);
                            ?></p>
                        </a>
                    </div>
                </div>
                <div class="pesquisa">
                    <form action="search_financas.php" method="post">
                        <div class="campos">
                            <input type="search" required name="procura" id="campo">
                            <button class="botaoSearch" type="submit"><img src="../imagens/lupa.png" class="icone" alt=""></button>
                        </div>
                    </form>
                </div>
                <div class="desk">
                    <a class="plus-btn" href="cadastro_financeiro.php">
                        <div><img src="../imagens/plussign.png" class="plus" alt=""></div>
                    </a>
                </div>
            </div>
            <section class="caixa-total">
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
                        $display = new FinancasView();
                        $display->getUsersNoUp();
                    ?>
                    </tbody>
                </table>
            </section>
        </section>

        <section class="caixa-mobile">
            <div class="cadastrar">
                <a class="plus-btn" href="cadastro_financeiro.php">
                    <div><img src="../imagens/plussign.png" class="plus" alt=""></div>
                </a>
            </div>
            
        </section>
    </main>
    

    <script src="javascript/paginas.js"></script>
</body>
</html>