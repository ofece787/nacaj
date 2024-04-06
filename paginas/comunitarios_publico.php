<?php 
    include 'includes/autoloader.inc.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lideres Comunitários</title>
    <!--
    <link rel="stylesheet" href="css/media.php">
    <link rel="stylesheet" href="css/painel_view_css.php">-->
    <link rel="stylesheet" href="css/style.php">
    <link rel="stylesheet" href="css/mobile_style/paine_admin.php">
    <link rel="stylesheet" href="css/icones.php">
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
                <a href="painel_view.php"><img src="../imagens/userLogo.png" class="icone" alt=""><span>Membros</span></a>
                <a href="comunitarios_publico.php"><img src="../imagens/userLogo.png" class="icone" alt=""><span>Comunitarios</span></a>
                <a href="l-religiosos_publico.php"><img src="../imagens/crosssign.png" class="icone" alt=""><span>Religiosos</span></a>
            </div>
        </section>

        <section class="p-desk">
            <a href="painel_view.php" class="not_selected membros"><div class="icone"><img src="../imagens/userlogo.png" class="icone" alt=""></div><span>Membros</span></a>
            <a href="comunitarios_publico.php" class="selected comunitarios"><div><div class="icone"><img src="../imagens/userLogo.png" class="icone" alt=""></div></div><span>L. Comunitários</span></a>
            <a href="l-religiosos_publico.php" class="not_selected religiosos"><div class="icone"><img src="../imagens/crosssign.png" class="icone" alt=""></div><span>L. Religiosos</span></div></a>
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
                    </div>
                </div>
                <div class="pesquisa">
                    <form action="search-comunitarios_publico.php" method="post">
                        <div class="campos">
                            <input type="search" required name="procura" id="campo">
                            <button class="botaoSearch" type="submit"><img src="../imagens/lupa.png" class="icone" alt=""></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="caixa-total">
                <table>
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Escalão</td>
                            <td>Endereço</td>
                            <td>Contacto</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            $viewMode = new ComunitariosView();
                            $viewMode->getComunitarioViewPublico();
                        ?>
                    </tbody>
                </table>
            </div>

        </section>
        
    </main>


    <script src="js/jquery/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="js/script.js"></script>
    <script src="javascript/main.js"></script>
    <script src="javascript/paginas.js"></script>
</body>
</html>