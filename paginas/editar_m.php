<?php

    include('dados_login.php');
    $logged = $_SESSION['logged'] ??null;
    if (!$logged) die('Voce precisa estar logado para acessar esta pagina <a href="../index.php">Log In</a>');


    if (isset($_GET['id'])){

        $id = $_GET['id'];
        $result = new UserView();
        $result->getMemberEdit($id);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Dados</title>
    <link rel="stylesheet" href="css/style.php">
    <link rel="stylesheet" href="css/membros_css.php">
    <script src="javascript/jquery/code.jquery.com_jquery-3.7.0.min.js"></script>
</head>
<body>
    

    <?php 
        

        if(isset($_POST['nome'])){

            $nome_usuario = $_SESSION['usuario'];
            $nome = $_POST['nome'];
            $apelido = $_POST['apelido'];
            $cargo = $_POST['cargo'];
            $bi = $_POST['bi'];
            $bairro = $_POST['bairro'];
            $contacto = $_POST['contacto'];
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $ano = $_POST['ano'];
            $dnascimento = $ano.'-'.$mes.'-'.$dia;
            $dia1 = $_POST['dia1'];
            $mes1 = $_POST['mes1'];
            $ano1 = $_POST['ano1'];
            $mafiliacao = $ano1.'-'.$mes1.'-'.$dia1;
            $data = date('Y');
            $data_dia = date('Y-m-d');
            $data_hora = date('h:i:s');
            $data_modificacao = $data_dia.' '.$data_hora;
            
            $nome_editado = $nome.' '.$apelido;

            $editar = new UserController();
            $editar->upMemberId($nome,$apelido,$cargo,$mafiliacao,$bi,$bairro,$contacto,$dnascimento,$id);
        }
    ?>


    <script src="javascript/jquery/script.js"></script>
</body>
</html>