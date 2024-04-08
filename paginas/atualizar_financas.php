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
    <link rel="stylesheet" href="css/painel_view_css.php">
    <link rel="stylesheet" href="css/icones.php">
    <link rel="stylesheet" href="css/style.php">
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
                <a href="financas.php"><img src="../imagens/userLogo.png" class="icone" alt=""><span>T. Financeira</span></a>
                <a href="" class="selected"><img src="../imagens/userLogo.png" class="icone" alt=""><span>A. Financeira</span></a>
            </div>
        </section>
        <section class="p-desk">
            <a href="financas.php" class="not_selected membros"><div class="icone"><img src="../imagens/userlogo.png" class="icone" alt=""></div><span>T. Financeira</span></a>
            <a href="" class="selected comunitarios"><div><div class="icone"><img src="../imagens/userLogo.png" class="icone" alt=""></div></div><span>A. Financeira</span></a>
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
                            <p class="logado"><?php echo ucfirst($_SESSION['usuario']);
                            ?></p>
                        </a>
                    </div>
                </div>
                <div class="pesquisa">
                    <form action="search_at_financas.php" method="post">
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
                            </tr>
                        </th>
                    </thead>
                    <tbody>
                    <?php
                        $display = new FinancasView();
                        $display->getUsers();
                    ?>
                    </tbody>
                </table>
            </section>
        </section>
    </main>
    <?php 
        $user = new FinancasController();

        if(isset($_POST['atualizar']) && $_POST['nome_at']){

            $nome = $_POST['nome_at'];
            $apelido = $_POST['apelido'];
            $jan = $_POST['janeiro'];
            $fev = $_POST['fevereiro'];
            $mar = $_POST['marco'];
            $abr = $_POST['abril'];
            $mai = $_POST['maio'];
            $jun = $_POST['junho'];
            $jul = $_POST['julho'];
            $ago = $_POST['agosto'];
            $set = $_POST['setembro'];
            $out = $_POST['outubro'];
            $nov = $_POST['novembro'];
            $dez = $_POST['dezembro'];
            $total = 0;
            $user->updateValue($nome, $apelido, $jan, $fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$total);

            
        }
        ?>


    <script src="javascript/paginas.js"></script>
</body>
</html>