<?php 
    include 'dados_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associação NACAJ | Cadastro de Lideres</title>
    <link rel="shortcut icon" href="../imagens/logoNACAJalinhado.png" type="image/x-icon">
    <link rel="stylesheet" href="css/lideres.php">
</head>
<body>
    

    <main>
        <section class="form">
            <div class="titulo-formulario">
                <h2>Cadastro de Membros</h2>
            </div>
            <a href="l-religiosos.php">
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
                        <label for="">Igreja</label>
                        <input type="text" name="igreja" required>
                    </div>

                    <div class="input-box">
                        <label for="">Religiao</label>
                        <input type="text" name="religiao" required>
                    </div>

                    <div class="input-box">
                        <label for="">Escalao</label>
                        <input type="text" name="escalao" required>
                    </div>

                    <div class="input-box">
                        <label for="">Endereco</label>
                        <input type="text" name="endereco" required>
                    </div>

                    <div class="input-box">
                        <label for="">Contacto</label>
                        <input type="text" name="contacto" required>
                    </div>
                
                    <input id="submit" type="submit" name="sub" value="Cadastrar">
                </form>
            </div>
        </section>

    </main>

    <?php 
        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
            $apelido = $_POST['apelido'];
            $igreja = $_POST['igreja'];
            $religiao = $_POST['religiao'];
            $escalao = $_POST['escalao'];
            $endereco = $_POST['endereco'];
            $contacto = $_POST['contacto'];

            $request = new ReligiososController();
            $request->addPraier($nome,$apelido,$igreja,$religiao,$escalao,$endereco,$contacto);
        }
    
    ?>


    <script src="js/jquery/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>