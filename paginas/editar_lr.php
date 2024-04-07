<?php 
    include 'includes/autoloader.inc.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Lideres</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lideres.php">
</head>
<body>
    

    <main>
        <section class="form">
            <div class="titulo-formulario">
                <h2>Cadastro de Lideres</h2>
            </div>
            <a href="comunitarios.php">
                <div class="fechar">
                    <div class="x"></div>
                </div>
            </a>
            <div class="formulario">
                <form action="" method="post"  enctype="multipart/form-data">
            <div class="formulario">
                <form action="" method="post">
                    <?php
                        $dados = new ComunitariosView();
                        $dados->getComunitarioId($id);
                    ?>
                </form>
            </div>
        </section>
        <?php 
            if(isset($_POST['nome'])){
                $nome = $_POST['nome'];
                $apelido = $_POST['apelido'];
                $escalao = $_POST['escalao'];
                $bairro = $_POST['endereco'];
                $contacto = $_POST['contacto'];

                $dados = new ComunitariosController();
                $dados->upComunitario($id, $nome, $apelido, $escalao, $bairro, $contacto);
            }
        
        ?>

    </main>



    <script src="js/jquery/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>