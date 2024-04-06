<?php 

    include('dados_login.php');
    $logged = $_SESSION['logged'] ??null;
    if (!$logged) {
        header('Location: index.php');
    }


    if(isset($_POST['senha'])){
        $nome = strtolower($_POST['nome']);
        $senha = $_POST['senha'];
        $senhaCadastro = new UserController();
        $senhaCadastro->senhaDb($nome, $senha);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Senhas</title>
</head>
<body>
    <main>
        <form action="" method="post">
            <input type="text" minlength="4" name="nome" id="" required>
            <input type="password" minlength="4" maxlength="16" name="senha" required>
            <input type="submit" value="Cadastrar">
        </form>
    </main>
</body>
</html>
