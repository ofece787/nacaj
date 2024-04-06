<?php 
    include 'includes/autoloader.inc.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membros</title>
    <link rel="stylesheet" href="css/lista.php">
    <script src="javascript/jquery/code.jquery.com_jquery-3.7.0.min.js"></script>
</head>
<body>

    <section class="infos">
        <?php
            $membros = new UserView();
            $membros->getMemberView();
        ?>
    </section>

    <a href="cadastro.php">Cadastrar Membro</a>
    

    <script src="javascript/jquery/script.js"></script>
</body>
</html>