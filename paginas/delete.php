<?php 
    include_once 'includes/autoloader.inc.php';
    
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $dados = new UserView();
        $nome = $dados->getDeleteName($id);
        
        $apagar = new UserController();
        $apagar->apagarUsuario($id, $nome);
    }
?>