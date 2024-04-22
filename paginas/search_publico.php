<?php 
    include 'includes/autoloader.inc.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associação NACAJ | Procurar Membros</title>
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
    <div class="lista active">
        <a href=""><img src="../imagens/userLogo.png" class="icone" alt=""><span>Membros</span></a>
        <a href="comunitarios_publico.php"><img src="../imagens/userLogo.png" class="icone" alt=""><span>Comunitarios</span></a>
        <a href="l-religiosos_publico.php"><img src="../imagens/crosssign.png" class="icone" alt=""><span>Religiosos</span></a>
    </div>
</section>
</header>

<main>
        <section class="caixa">
            <div class="cadastrar">
                <div class="volta">
                    <div class="s-voltar">
                        <a href="painel_view.php">
                            <div class="botao">
                                <img src="../imagens/backarrow.png" class="icone" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="pesquisa">
                    <form action="" method="post">
                        <div class="campos">
                            <input type="search" required name="procura" id="campo" minlength="1">
                            <button class="botaoSearch" type="submit"><img src="../imagens/lupa.png" class="icone" alt=""></button>
                        </div>
                    </form>
                    <div class="display-search">
                        
                    </div>
                </div>
            </div>
            <div class="caixa-total">
                <table>
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Cargo</td>
                            <td>Contacto</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(isset($_POST['procura'])){
                                $procura = $_POST['procura'];
                                $nome = $procura;
                                $apelido = $procura;
                                $cargo = $procura;
                                if(empty($procura)){
                                    echo "Digite o que deseja pesquisar";
                                }
                        
                                if(!empty($procura)){
                                    $result = new UserView();
                                    $result->searchMember($nome,$apelido,$cargo);
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
        
    </main>

    <script src="javascript/main.js"></script>
</body>
</html>
                            