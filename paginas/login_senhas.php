
<?php
    include_once 'includes/autoloader.inc.php';

    session_start();

    
    $_SESSION['logged'] = $_SESSION['logged'] ?? False;

    
    if (isset($_POST['usuario']) && $_POST['senha']){
        $p_usuario = strtolower($_POST['usuario']);
        $p_senha = $_POST['senha'];
        
        $usuarios = new SenhasController();
        $usuarios->loginSenhasDb($p_usuario, $p_senha);   
    
    }
    

?>