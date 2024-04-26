
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associação NACAJ | Cadastro de Lideres</title>
    <link rel="shortcut icon" href="../imagens/logoNACAJalinhado.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.php">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

    <main>
    <section class="formulario">
        <h2>Aditar Membro</h2>
            
    </section>
    <form action="" method="post">   
    
    <?php 
        include_once 'includes/autoloader.inc.php';
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $visao = new UserView();
            $visao->getMemberEdit($id);


        

            if(isset($_POST['edit'])){
                $nome = $_POST['nome'];
                $apelido = $_POST['apelido'];
                $cargo = $_POST['cargo'];
                $mafiliacao = $_POST['mesafiliacao'];
                $bi = $_POST['bi'];
                $bairro = $_POST['bairro'];
                $contacto = $_POST['contacto'];
                $dnascimento = $_POST['dnascimento'];

                $result = new UserController();
                $result->upMemberId($nome,$apelido,$cargo,$mafiliacao,$bi,$bairro,$contacto,$dnascimento,$id);

            }    

        }

    ?>
    </form> 

    </main>


</body>
</html>