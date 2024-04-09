<?php 

    class Financas extends Dbc {

        protected function createFinanceiro($nome,$apelido,$cargo,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot){

            $sql_prepare = "SELECT * FROM ano_2023 WHERE nome = ? and apelido = ? and cargo = ?";
            $stmt_prepare = $this->connect()->prepare($sql_prepare);
            $stmt_prepare->execute([$nome,$apelido,$cargo]);
            $num = $stmt_prepare->rowCount();
            if($num == 0){

                $sql = "INSERT INTO ano_2023(nome, apelido, cargo, janeiro, fevereiro, marco, abril,maio, junho, julho, agosto, setembro, outubro, novembro, dezembro, total) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([strtolower($nome),strtolower($apelido),strtolower($cargo),$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot]);
    
                echo "<script>alert('Success')</script>";
            } else {
                echo "<script>alert('Usar ja existente')</script>";
            }

        }

        protected function upValue($nome,$apelido,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot){
            $sql = "SELECT * FROM ano_2023 WHERE nome = ? and apelido = ?";



            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([strtolower($nome), strtolower($apelido)]);
            $dados = $stmt->fetchAll();
            $num = $stmt->rowCount();
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
                    $stmt->execute([strtolower($nome),$jan_value,$fev_value,$mar_value,$abr_value,$mai_value,$jun_value,$jul_value,$ago_value,$set_value,$out_value,$nov_value,$dez_value,$tot_value,strtolower($nome)]);
                    echo "<script>alert('success')</script>";
                } else{
                    echo "<script>alert('Nobody found')</script>";
                }
            }
            
        }

        protected function logIn_financas($nome, $senha) {
            $sql = "SELECT * FROM usuario_senha WHERE nome = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([strtolower($nome)]);
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

        protected function getUser(){
            $sql = "SELECT * FROM ano_2023 ORDER BY nome";
            $stmt = $this->connect()->query($sql);

            $dados = $stmt->fetchAll();

            return $dados;
        }

        protected function searchFinancas($nome, $apelido){
            $nome = "%$nome%";
            $apelido = "%$apelido%";
            $sql = "SELECT * FROM ano_2023 where nome like ? or apelido like ?";

            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([strtolower($nome),strtolower($apelido)]);
            $dados = $stmt->fetchAll();
            $num = $stmt->rowCount();


            if($num >=1){
                return $dados;
            } else{
                return 0;
            }
        }
    }