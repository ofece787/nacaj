<?php 
    $user = 'root';
    $password = '';
    $host = 'localhost';
    $database = 'nacaj';

    $mysql = new mysqli($host, $user, $password, $database);

    if($mysql->error){
        die('Falha ao conectar'); 
    }
?>