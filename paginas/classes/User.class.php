<?php 


    class User extends Dbc {

        protected function getUser(){
            $sql = "SELECT * FROM ano_2023 ORDER BY nome";
            $stmt = $this->connect()->query($sql);

            $dados = $stmt->fetchAll();

            return $dados;
        }

        protected function getMember() {
            $sql = "SELECT * FROM membros_1 ORDER BY nome";
            $stmt = $this->connect()->query($sql);
            $dados = $stmt->fetchAll();

            return $dados;
        }

        protected function getMemberById($id) {
            $sql = "SELECT * FROM membros_1 where id = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetchAll();
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

        protected function logIn($nome, $senha) {
            $sql = "SELECT * FROM usuario_senha WHERE nome = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome]);
            $dados = $stmt->rowCount();

            if($dados >= 1){
                $row = $stmt->fetchAll();
                $nome_db = $row[0]['nome'];
                $senha_db = $row[0]['senha'];

                if(password_verify($senha, $row[0]['senha'])) {
                } 
                
                if ($nome == $nome_db && password_verify($senha, $senha_db)) {
                    
                    $_SESSION['usuario'] = $nome_db;
                    $_SESSION['senha'] = $senha_db;
                    $_SESSION['logged'] = True;
                    
                    header('Location: painel_admin.php');
                } else{
                    echo "<script>alert('Nome ou senha Incorreto')</script>";
                }
            } 

        }
        protected function logIn_financas($nome, $senha) {
            $sql = "SELECT * FROM usuario_senha WHERE nome = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome]);
            $dados = $stmt->rowCount();

            if($dados >= 1){
                $row = $stmt->fetchAll();
                $nome_db = $row[0]['nome'];
                $senha_db = $row[0]['senha'];

                if(password_verify($senha, $row[0]['senha'])) {
                } 
                
                if ($nome == $nome_db && password_verify($senha, $senha_db)) {
                    
                    $_SESSION['usuario'] = $nome_db;
                    $_SESSION['senha'] = $senha_db;
                    $_SESSION['logged'] = True;
                    
                    header('Location: financas.php');
                } else{
                    echo "<script>alert('Nome ou senha Incorreto')</script>";
                }
            } 

        }

        protected function upValue($nome,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot){
            $sql = "SELECT * FROM ano_2023 WHERE nome = ?";



            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome]);
            $dados = $stmt->fetchAll();
            $num = $stmt->rowCount();
            //echo $dados['janeiro'];
            foreach($dados as $dado){

                $jan_value = $dado['janeiro'] + $jan;
                $fev_value = $dado['fevereiro'] + $fev;
                $mar_value = $dado['marco'] + $mar;
                $abr_value = $dado['abril'] + $abr;
                $mai_value = $dado['maio'] + $mai;
                $jun_value = $dado['junho'] + $jun;
                $jul_value = $dado['julho'] + $jul;
                $ago_value = $dado['agosto'] + $ago;
                $set_value = $dado['setembro'] + $set;
                $out_value = $dado['outubro'] + $out;
                $nov_value = $dado['novembro'] + $nov;
                $dez_value = $dado['dezembro'] + $dez;
                $total = $dado['total'];
                $tot_value = $total + $jan +$fev+$mar+$abr+$mai +$jun+$jul+$ago+$set +$out+$nov+$dez+$tot;
                

                if($num==1){
                    $sql = "UPDATE ano_2023 SET nome=?, janeiro=?, fevereiro=?, marco=?, abril=?,maio=?, junho=?, julho=?, agosto=?, setembro=?, outubro=?, novembro=?, dezembro=?, total=? where nome=?";

    
    
                    $stmt = $this->connect()->prepare($sql);
                    $stmt->execute([$nome,$jan_value,$fev_value,$mar_value,$abr_value,$mai_value,$jun_value,$jul_value,$ago_value,$set_value,$out_value,$nov_value,$dez_value,$tot_value,$nome]);
                    echo "<script>alert('success')</script>";
                } else{
                    echo "<script>alert('Nobody found')</script>";
                }
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
            $not_found = array("valor"=> 1);

            if($num >=1) {
                return $dados;
            } else {
                return 1;
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

        protected function cadastrarSenha($nome, $senha){
            $sql_prepare = "SELECT * FROM usuario_senha WHERE nome = ?";
            $stmt_prepare = $this->connect()->prepare($sql_prepare);
            $stmt_prepare->execute([$nome]);
            $dados = $stmt_prepare->rowCount();

            if($dados == 0){

                $prepare_senha = password_hash($senha, PASSWORD_DEFAULT);
                $senha = $prepare_senha;
                $sql = "INSERT INTO usuario_senha(nome, senha) VALUES (?,?)";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$nome, $senha]);
                if($stmt){
                    echo "<script>alert('Success')</script>";
                }
            } else{
                echo "<script>alert('Nome de usuario indisponivel')</script>";
            }
            
            

        }

        protected function createFinanceiro($nome,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot){
            $sql = "INSERT INTO ano_2023(nome, janeiro, fevereiro, marco, abril,maio, junho, julho, agosto, setembro, outubro, novembro, dezembro, total) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot]);

            echo "<script>alert('Success')</script>";
        }
        
    }
