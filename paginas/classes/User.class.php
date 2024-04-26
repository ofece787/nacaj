<?php 


    class User extends Dbc {

        

        protected function getMember() {
            $sql = "SELECT * FROM membros_1 ORDER BY nome";
            $stmt = $this->connect()->query($sql);
            $dados = $stmt->fetchAll();

            $num = $stmt->rowCount();
            if($num >= 1){
                return $dados;

            } else {
                return 0;
            }
        }

        protected function getMemberById($id) {
            $sql = "SELECT * FROM membros_1 where id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetchAll();
            return $result;
        }

        protected function contarMembros() {
            $sql = "SELECT count(*) FROM membros_1";
            $stmt = $this->connect()->query($sql);
            $result = $stmt->fetch();

            return $result;
        }

        protected function setUser($nome,$apelido,$cargo,$mafiliacao,$bi,$bairro,$contacto,$dnascimento,$idadea,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot,$nome_usuario,$nome_editado,$data_modificacao){
            $sql = "SELECT * FROM membros_1 WHERE nome = ? AND apelido = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome, $apelido]);
            $num = $stmt->rowCount();

            if($num==0) {

                $sql = "INSERT INTO membros_1(nome, apelido, cargo, mesafiliacao, bi, bairro, contacto, dnascimento, idade) VALUES (?,?,?,?,?,?,?,?,?)";

                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$nome,$apelido,$cargo,$mafiliacao,$bi,$bairro,$contacto,$dnascimento,$idadea]);

                
                if($stmt == true){
                        $sql = "INSERT INTO ano_2023(nome, janeiro, fevereiro, marco, abril,maio, junho, julho, agosto, setembro, outubro, novembro, dezembro, total) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

                        $stmt = $this->connect()->prepare($sql);
                        $stmt->execute([$nome,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot]);

                        echo "<script>alert('Success')</script>";
                }
            } else {
                echo "<script>alert('Name already exist')</script>";
            }
        }

        protected function upMember($nome,$apelido,$cargo,$mafiliacao,$bi,$bairro,$contacto,$dnascimento,$id){
            $sql = "SELECT * FROM membros_1 where id=?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            $dados = $stmt->rowCount();
            if($dados == 1) {
                $sql_up = "UPDATE membros_1 set nome=?, apelido=?, cargo=?, mesafiliacao=?, bi=?, bairro=?, contacto=?, dnascimento=? WHERE id=?";
                $stmt_up = $this->connect()->prepare($sql_up);
                $stmt_up->execute([$nome,$apelido,$cargo,$mafiliacao,$bi,$bairro,$contacto,$dnascimento,$id]);
                if($stmt_up == true){
                    echo "<script>alert('Sucesso')</script>";
                } else{
                    echo "error";
                }
            } else {
                echo "<script>alert('Duplicated values')</script>";
            }
        }

        
        

        

        protected function searchMembro($nome, $apelido, $cargo) {
            $nome = "%$nome%";
            $apelido = "%$apelido%";
            $cargo = "%$cargo%";
            $sql = "SELECT * FROM membros_1 WHERE nome like ? or apelido like ? or cargo like ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome,$apelido,$cargo]);
            $num = $stmt->rowCount();
            $dados = $stmt->fetchAll();

            if($num >=1) {
                return $dados;
            } else {
                return 1;
            }
        }

        protected function searchCount($nome, $apelido, $cargo){
            $nome = "%$nome%";
            $apelido = "%$apelido%";
            $cargo = "%$cargo%";
            $sql = "SELECT * FROM membros_1 WHERE nome like ? or apelido like ? or cargo like ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome,$apelido,$cargo]);
            $num = $stmt->rowCount();

            if($num >=1) {
                return $num;
            } else {
                return 0;
            }
        }

        

        

        protected function upDateMember($nome,$apelido,$cargo,$mafiliacao,$bi,$bairro,$contacto,$dnascimento,$idadea) {
            $sql = "UPDATE membros_1 SET nome = ?, apelido = ?, cargo = ?, mesafiliacao = ?, bi = ?, bairro = ?, contacto = ?, dnascimento = ?, idade = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome,$apelido,$cargo,$mafiliacao,$bi,$bairro,$contacto,$dnascimento,$idadea]);
        }

        protected function deleteMember($id,$nome){
            $sql = "DELETE FROM membros_1 where id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);

            if($stmt){
                $sql_1 = "DELETE FROM ano_2023 where id = ?";
                header('Location: painel_admin.php');
            } else {
                echo "<script>alert('Falha ao apagar membro')";
            }
        }

        

        
        
    }
