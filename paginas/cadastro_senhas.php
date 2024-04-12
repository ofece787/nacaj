<?php 

    include('login_senhas.php');
    $logged = $_SESSION['logged'] ??null;
    if (!$logged) {
        header('Location: index.php');
    }


    if(isset($_POST['senha'])){
        $nome = strtolower($_POST['nome']);
        $senha = $_POST['senha'];
        $nivel = $_POST['nivel'];
        $senhaCadastro = new SenhasController();
        $senhaCadastro->senhaDb($nome, $senha, $nivel);
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
        <a href="painel_admin.php">voltar</a>
        <form action="" method="post">
            <input type="text" minlength="4" name="nome" id="" required>
            <input type="password" minlength="4" maxlength="16" name="senha" required>
            <select name="nivel" id="" required>
                <option value="">Selecionar nivel</option>
                <option value="admin">Admin</option>
                <option value="financeiro">financeiro</option>
            </select>
            <input type="submit" value="Cadastrar">
        </form>
    </main>
</body>
</html>
