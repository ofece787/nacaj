<?php 
include_once('dados_login.php');
$logged = $_SESSION['logged'] ??null;
if (!$logged) {
    header('Location: index.php');
}
$viewMode = new UserView();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associação NACAJ | Painel Administrativo</title>
    <link rel="shortcut icon" href="../imagens/logoNACAJalinhado.png" type="image/x-icon">
    <!--<link rel="stylesheet" href="css/style.php">
    <link rel="stylesheet" href="css/media.php">-->
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
                <a href="" class="selected"><img src="../imagens/userLogo.png" class="icone" alt=""><span>Membros</span></a>
                <a href="comunitarios.php"><img src="../imagens/userLogo.png" class="icone" alt=""><span>Comunitarios</span></a>
                <a href="l-religiosos.php"><img src="../imagens/crosssign.png" class="icone" alt=""><span>Religiosos</span></a>
            </div>
        </section>
        <section class="p-desk">
            <a href="" class="selected membros"><div class="icone"><img src="../imagens/userlogo.png" class="icone" alt=""></div><span>Membros</span></a>
            <a href="comunitarios.php" class="not_selected comunitarios"><div><div class="icone"><img src="../imagens/userLogo.png" class="icone" alt=""></div></div><span>L. Comunitários</span></a>
            <a href="l-religiosos.php" class="not_selected religiosos"><div class="icone"><img src="../imagens/crosssign.png" class="icone" alt=""></div><span>L. Religiosos</span></div></a>
        </section>
    </header>

    <main>
    <section class="caixa">

        <div class="cadastrar radius">
            <div class="volta">
                <div class="s-voltar">
                    <a href="../index.php">
                        <div class="botao">
                            <img src="../imagens/backarrow.png" class="icone" alt="">
                        </div>
                    </a>
                    <a href="form_senhas.php">
                        <p class="logado"><?php echo ucfirst($_SESSION['usuario']);
                        ?></p>
                    </a>
                </div>
            </div>
            <div class="pesquisa">
                <form action="search.php" method="post">
                    <div class="campos">
                        <input type="search" required name="procura" id="campo">
                        <button class="botaoSearch" type="submit"><img src="../imagens/lupa.png" class="icone" alt=""></button>
                    </div>
                </form>
            </div>
            <div class="desk">
                <a class="plus-btn" href="cadastro_m.php">
                    <div><img src="../imagens/plussign.png" class="plus" alt=""></div>
                </a>
            </div>
        </div>
        <div class="caixa-total">
            <table>
                <div class="contagem">
                    <p class="contagem-pessoas">
                        <?php
                            $viewMode->countMembros();
                        ?>
                    </p>
                </div>
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>Cargo</td>
                        <td>Contacto</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $viewMode->getMemberView()
                    ?>
                </tbody>
            </table>
        </div>
        
    </section>

    <section class="caixa-mobile">
        <div class="cadastrar">
            <a class="plus-btn" href="cadastro_m.php">
                <div><img src="../imagens/plussign.png" class="plus" alt=""></div>
            </a>
        </div>
        
    </section>
    </main>
    

    <script src="javascript/main.js"></script>
    <script src="javascript/paginas.js"></script>
</body>
</html>