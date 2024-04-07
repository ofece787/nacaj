<?php 

    class Religiosos extends Dbc {

        protected function getReligioso() {
            $sql = "SELECT * FROM religiosos ORDER BY nome";
            $stmt = $this->connect()->query($sql);
            $dados = $stmt->fetchAll();
            $num = $stmt->rowCount();
            if($num >= 1){
                return $dados;

            } else {
                return 0;
            }
        }

        protected function searchReligioso($nome,$apelido,$igreja,$religiao,$escalao){
            $nome = "%$nome%";
            $apelido = "%$apelido%";
            $igreja = "%$igreja%";
            $religiao = "%$religiao%";
            $escalao = "%$escalao%";
            $sql = "SELECT * FROM religiosos WHERE nome like ? or apelido like ? or igreja like ? or religiao like ? or escalao like ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome,$apelido,$igreja,$religiao,$escalao]);
            $num = $stmt->rowCount();
            $dados = $stmt->fetchAll();
            

            if($num >=1){
                return $dados;
            } else {
                return 1;
            }
            
        }

        protected function getReligiosoById($id){
            $sql = "SELECT * FROM religiosos where id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);

            $dados = $stmt->fetchAll();
            return $dados;
        }

        protected function updateReligioso($nome, $apelido,$igreja,$religiao, $escalao, $endereco, $contacto, $id){
            $sql = "UPDATE religiosos SET nome = ?, apelido = ?, igreja = ?, religiao = ?, escalao = ?, bairro = ?, contacto = ? WHERE id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome, $apelido,$igreja,$religiao, $escalao, $endereco, $contacto, $id]);

            if($stmt){
                echo "<script>alert('Success')</script>";
            }
        }

        protected function deleteReligiosos($id){
            $sql = "DELETE FROM religiosos where id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);

            if($stmt){
                header("Location: l-religiosos.php");
            } else {
                echo "<script>alert('Falha ao apagar')</script>";
            }
        }

        protected function setPraier($nome,$apelido,$igreja,$religiao,$escalao,$endereco,$contacto){
            $sql = "INSERT INTO religiosos (nome,apelido,igreja,religiao,escalao,bairro,contacto) VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome,$apelido,$igreja,$religiao,$escalao,$endereco,$contacto]);
            if($stmt){
                echo "<script>alert('Success')</script>";
            }
        }
    }

?>