<?php 
    include_once('dados_login.php');
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
    <title>Associação NACAJ | Apagar</title>
    <link rel="shortcut icon" href="../imagens/logoNACAJalinhado.png" type="image/x-icon">
    <link rel="stylesheet" href="css/prompt.php">
</head>
<body>
    
    <main>
        <section class="caixa">
            <div><h2>Deseja realmente apagar este membro?</h2></div>
            <section>
                <?php
                    if(!empty($_GET['id'])){
                        $id = $_GET['id'];
            
                        echo "<a href=\"delete.php?id=".$id."\"><div class=\"sim\">Sim</div></a>";
                    }
            
                ?>
                <a class="nao" href="informacoes_m.php?id=<?php echo $id;?>"><div>Não</div></a>
            </section>
        </section>
    </main>
</body>
</html>