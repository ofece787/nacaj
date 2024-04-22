<?php 
    include('login_senhas.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associação NACAJ | Log In</title>
    <link rel="shortcut icon" href="../imagens/logoNACAJalinhado.png" type="image/x-icon">
    <link rel="stylesheet" href="css/prompt.php">
    <link rel="stylesheet" href="css/style.php">
</head>
<body>
    <form action="" method="post">
        <div class="form">
            <a href="painel_admin.php">
                <div class="fechar">
                    <img src="../imagens/plussign.png" class="voltar" alt="">
                </div>
            </a>
        </div>
        <div class="input-box caixa-login">
            <label for="">Digite o seu nome</label>
            <input type="text" minlength="4" name="usuario" id="" required>
        </div>

        <div class="input-box caixa-login">
            <label for="">Digite a sua senha</label>
            <input type="password" minlength="4" maxlength="16" name="senha" id="" required>
        </div>

        <input type="submit" value="Entrar" class="nao">
    </form>

</body>
</html>