<?php 
    if(!empty($_GET['id'])){
        $nome_usuario = $_SESSION['usuario']
;        $id = $_GET['id'];
        $data_modificacao = $data_dia.' '.$data_hora;
            
        $nome_editado = $nome.' '.$apelido;
        
        $sql = "SELECT * FROM membros_1 WHERE id=$id";

        $sql_res = $mysql->query($sql);
        $row = mysqli_fetch_assoc($sql_res);


        if($sql_res->num_rows > 0){
            $sqlDel = "DELETE FROM membros_1 WHERE id=$id";
            $sql_Del = $mysql->query($sqlDel);


            if($sql_Del == true){
                $sql_accaoed = "INSERT INTO tabela_accoes (nome, accao, nome_deletado, data_modificacao) VALUES ('$nome_usuario', 'Deleção', '$nome_editado', '$data_modificacao')";
                $sql_resed = mysqli_query($mysql, $sql_accaoed);
            }
        }
        header('Location: index.php');
    }
?>