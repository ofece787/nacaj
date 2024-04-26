<?php 
include_once 'includes/autoloader.inc.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associação NACAJ | Membro</title>
    <link rel="shortcut icon" href="../imagens/logoNACAJalinhado.png" type="image/x-icon">
    <link rel="stylesheet" href="css/perfil.php">
    <link rel="stylesheet" href="../css/search-css.php">
    <link rel="stylesheet" href="../sistema_cadastro/css/perfil.php">
</head>
<body>
    <main>
        <section>
            <div class="s-voltar">
                <a href="painel_admin.php">
                    <div class="botao">
                        <p>Voltar</p>
                    </div>
                </a>
            </div>
            <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM membros_1 where id=$id";
                $sql_res = mysqli_query($mysql, $sql);
                while($usuario = mysqli_fetch_assoc($sql_res)){
                    echo "<div class=\"caixa-perfil\">";
                    echo "<div class=\"perfil\"><di></div><div><div><h2>".ucfirst($usuario['nome'])." ".ucfirst($usuario['apelido'])."</h2></div><div>".ucfirst($usuario['cargo'])."</div></div></div>";
                    echo "<div class=\"dados\">";
                    echo "<div><span class=\"negro\">Nome: </span><span>".ucfirst($usuario['nome'])." ".ucfirst($usuario['apelido'])."</span></div><div><span class=\"negro\">Cargo: </span>".ucfirst($usuario['cargo'])."</div><div><span class=\"negro\">Data de Afiliação: </span>".$usuario['mesafiliacao']."</div><div><span class=\"negro\">Bairro: </span>".ucfirst($usuario['bairro'])."</div><div><span class=\"negro\">Contacto: </span>".$usuario['contacto']."</div><div><span class=\"negro\">Data de Nascimento: </span>".$usuario['dnascimento']."</div><div><span class=\"negro\">Idade: </span>".$usuario['idade']." anos</div>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>

        </section>
    </main>
    
</body>
</html>
