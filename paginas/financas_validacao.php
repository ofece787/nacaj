
<?php
    include 'includes/autoloader.inc.php';

    session_start();

    if (isset($_GET['logout']) && $_GET['logout'] == 1) {
        $_SESSION = array();
        session_destroy();
        echo "done";
    }

    
    $_SESSION['logged'] = $_SESSION['logged'] ?? False;

    
    if (isset($_POST['usuario']) && $_POST['senha']){
        $p_usuario = strtolower($_POST['usuario']);
        $p_senha = $_POST['senha'];
        
        $usuarios = new FinancasController();
        $usuarios->log_financas($p_usuario, $p_senha);   
    
    }
    

?>