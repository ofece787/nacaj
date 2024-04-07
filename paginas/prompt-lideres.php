<?php 
    include('dados_login.php');
    $logged = $_SESSION['logged'] ??null;
    if (!$logged) {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar</title>
    <link rel="stylesheet" href="css/prompt.php">
</head>
<body>
    
    <main>
        <div><p>Deseja realmente apagar este membro?</p></div>
        <section>
            <?php
                if(!empty($_GET['id'])){
                    $id = $_GET['id'];
        
                    echo "<a href=\"delete_l.php?id=".$id."\"><div class=\"sim\">Sim</div></a>";
                }
        
            ?>
            <a class="nao" href="l-religiosos.php"><div>Não</div></a>
        </section>
    </main>
</body>
</html>