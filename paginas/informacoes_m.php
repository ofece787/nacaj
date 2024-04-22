<?php 
include('dados_login.php');
$logged = $_SESSION['logged'] ??null;
if (!$logged) die('Voce precisa estar logado para acessar esta pagina <a href="../index.php">Log In</a>');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associação NACAJ | Membro</title>
    <link rel="shortcut icon" href="../imagens/logoNACAJalinhado.png" type="image/x-icon">
    <link rel="stylesheet" href="css/perfil.php">
    <link rel="stylesheet" href="css/search-css.php">
    <link rel="stylesheet" href="css/style.php">
</head>
<body>
    <main>
        <section>
            <div class="s-voltar">
                <a href="painel_admin.php">
                    <div class="botao">
                        <img src="../imagens/backarrow.png" class="voltar" alt="">
                    </div>
                </a>
            </div>
            <section>
                <div class="dados">
                    <?php
                        $id = $_GET['id'];
                        $membro = new UserView();
                        $membro->getMemberId($id);
                    ?>
                </div>
            </section>

        </section>
    </main>
    
</body>
</html>
