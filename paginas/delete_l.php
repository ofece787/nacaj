<?php 
    include('dados_login.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        echo $id;
        
        $delete = new ReligiososController();
        $delete->deletePraier($id);
    }
?>