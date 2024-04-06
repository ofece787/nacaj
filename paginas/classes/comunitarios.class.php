<?php 

    class Comunitarios extends Dbc {

        protected function deleteComunitarios($id){
            $sql = "DELETE FROM comunitarios where id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);

            if($stmt){
                header("Location: comunitarios.php");
            } else {
                echo "<script>alert('Falha ao apagar')</script>";
            }
        }

        protected function getComunitario() {
            $sql = "SELECT * FROM comunitarios ORDER BY nome";
            $stmt = $this->connect()->query($sql);
            $dados = $stmt->fetchAll();
            return $dados;
        }

        protected function searchComunitario($nome, $apelido, $cargo){
            $nome = "%$nome%";
            $apelido = "%$apelido%";
            $escalao = "%$cargo%";
            $sql = "SELECT * FROM comunitarios WHERE nome like ? or apelido like ? or escalao like ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome,$apelido,$escalao]);
            $num = $stmt->rowCount();
            $dados = $stmt->fetchAll();

           if ($num >=1){
                return $dados;
           } else {
            return 1;
           }
        }

        protected function getComunitarioById($id){
            $sql = "SELECT * FROM comunitarios where id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            $dados = $stmt->fetchAll();
            return $dados;
        }

        protected function updateComunitario($id, $nome, $apelido, $escalao, $endereco, $contacto) {
            $sql = "UPDATE comunitarios SET nome = ?, apelido = ?, escalao = ?, endereco = ?, contacto = ? where id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome, $apelido, $escalao, $endereco, $contacto, $id]);
            
            if ($stmt) {
             echo "<script>alert('Success')</script>";
            }
        }

        protected function setLeader($nome,$apelido,$escalao,$endereco,$contacto){
            $sql = "INSERT INTO comunitarios (nome,apelido,escalao,endereco,contacto) VALUES (?,?,?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome,$apelido,$escalao,$endereco,$contacto]);
            if($stmt){
                echo "<script>alert('Success')</script>";
            }
        }
    }


?>