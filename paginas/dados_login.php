
<?php
    include 'includes/autoloader.inc.php';

    session_start();

    
    $_SESSION['logged'] = $_SESSION['logged'] ?? False;

    
    if (isset($_POST['usuario']) && $_POST['senha']){
        $p_usuario = strtolower($_POST['usuario']);
        $p_senha = $_POST['senha'];
        
        $usuarios = new UserController();
        $usuarios->logInDados($p_usuario, $p_senha);   
    
    }
    

?>