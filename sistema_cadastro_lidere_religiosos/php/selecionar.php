<?php 
    header('Content-type: application/json');
    
    $pdo = new PDO('mysql:host=localhost; dbname=nacaj;', 'root', '');

    $stmt = $pdo->prepare('SELECT * FROM lideres_comunitarios');
    $stmt->execute();

    if ($stmt->rowCount() >= 1) {
        echo ($stmt->fetchAll(PDO::FETCH_ASSOC));
    } else{
        echo json_encode('Falha');
    }
?>