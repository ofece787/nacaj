<?php 
    include 'includes/autoloader.inc.php';
/*
    include('dados_login.php');
    $logged = $_SESSION['logged'] ??null;
    if (!$logged) {
        header('Location: index.php');
    }
*/
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $dados = new UserView();
        $nome = $dados->getDeleteName($id);
        
        $apagar = new UserController();
        $apagar->apagarUsuario($id, $nome);
    }
?>