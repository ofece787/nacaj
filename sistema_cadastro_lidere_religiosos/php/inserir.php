<?php 
    header('Content-type: application/json');

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $igreja = $_POST['igreja'];
        $religiao = $_POST['religiao'];
        $escalao = $_POST['escalao'];
        $endereco = $_POST['endereco'];
        $contacto = $_POST['contacto'];
    
        $pdo = new PDO('mysql:host=localhost; dbname=nacaj;', 'root', '');
    
        $stmt = $pdo->prepare('INSERT INTO religiosos (nome, apelido, igreja, religiao, escalao, bairro, contacto) VALUES (:no, :ap, :ig, :re, :es, :en, :co)');
    
        $stmt->bindValue(':no', $nome);
        $stmt->bindValue(':ap', $apelido);
        $stmt->bindValue(':ig', $igreja);
        $stmt->bindValue(':re', $religiao);
        $stmt->bindValue(':es', $escalao);
        $stmt->bindValue(':en', $endereco);
        $stmt->bindValue(':co', $contacto);
        $stmt->execute();

        if($stmt == true){
            $sql_accaoed = "INSERT INTO tabela_accoes (nome, accao, nome_deletado, data_modificacao) VALUES ('$nome_usuario', 'Cadastro', '$nome_editado', '$data_modificacao')";
            $sql_resed = mysqli_query($mysql, $sql_accaoed);
        }

        header('Location: ../../l-religiosos.php');

    }

    

?>