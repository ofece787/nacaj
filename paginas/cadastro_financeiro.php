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
    <title>Cadastro Financeiro</title>
    <link rel="stylesheet" href="css/style.php">
    <link rel="stylesheet" href="css/membros_css.php">
    <script src="javascript/jquery/code.jquery.com_jquery-3.7.0.min.js"></script>
</head>
<body>
    <section class="form">
        <div class="titulo-formulario">
            <h2>Cadastro Financeiro</h2>
        </div>
        <a href="financas.php">
            <div class="fechar">
                <div class="x"></div>
            </div>
        </a>
        <div class="formulario">
            <form action="" method="post"  enctype="multipart/form-data">

                <div class="input-box" id="na">
                    <div class="input-box">
                        <label for="">Nome</label>
                        <input type="text" name="nome" id="" required>
                    </div>
                    <div class="input-box">
                        <label for="">Apelido</label>
                        <input type="text" name="apelido" id="" required>
                    </div>
                </div>


                <div class="input-box">
                    <label for="">Cargo</label>
                    <input type="text" name="cargo" required>
                </div>

            
                <input id="submit" type="submit" name="sub" value="Cadastrar">
            </form>
        </div>
    </section>


    <?php 
        if(isset($_POST['sub'])){
            $nome = $_POST['nome'];
            $nome_usuario = $_SESSION['usuario'];
            $apelido = $_POST['apelido'];
            $cargo = $_POST['cargo'];
            
            $nome_editado = $nome.' '.$apelido;
            
            $nome_editado = $nome.' '.$apelido;
            $jan = 0;
            $fev = 0;
            $mar = 0;
            $abr = 0;
            $mai = 0;
            $jun = 0;
            $jul = 0;
            $ago = 0;
            $set = 0;
            $out = 0;
            $nov = 0;
            $dez = 0;
            $tot = 0;

            $membro = new FinancasController();
            $membro->setFinanceiro($nome,$apelido,$cargo,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot,$nome_usuario);

        }
    ?>


    <script src="javascript/jquery/script.js"></script>
</body>
</html>