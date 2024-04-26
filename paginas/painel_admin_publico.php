<?php 
include_once 'includes/autoloader.inc.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associação NACAJ | Painel Administrativo</title>
    <link rel="shortcut icon" href="../imagens/logoNACAJalinhado.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.php">
    <link rel="stylesheet" href="../css/media.php">
    <link rel="stylesheet" href="../css/icones.php">
</head>
<body>

    <header>

        <h2>NACAJ</h2>
        <section>
            <a href="" class="selected membros"><div class="icone"><img src="../imagens/usericon.png" alt=""></div><span>Membros</span></a>
            <a href="comunitarios.php" class="not_selected comunitarios"><div><div class="comunitarios-icone"><div class="necklace light"></div></div></div><span>L. Comunitários</span></a>
            <a href="l-religiosos.php" class="not_selected religiosos"><div class="icone"><img src="../imagens/crosssign.png" alt=""></div><span>L. Religiosos</span></div></a>
        </section>
    </header>
    
    <main>
        <section class="caixa">

            <div class="cadastrar">
                <div class="s-voltar">
                    <a href="../index.php">
                        <div class="botao">
                            <img src="../imagens/backarrow.png" class="voltar" alt="">
                        </div>
                    </a>
                </div>
                <div class="pesquisa">
                    <form action="search.php" method="post">
                        <div class="campos">
                            <input type="search" name="procura" id="campo">
                            <input type="submit" value="Procurar" id="botao">
                        </div>
                        <div class="lupa">
                            <div class="caixa">
                                <div class="lupa-circulo"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="caixa-total">
                <?php

                    
                    $viewMode = new UserView();
                    $viewMode->getMemberView()

                ?>
            </div>
        </section>
        
    </main>
    

    <script src="js/script.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>