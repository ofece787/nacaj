<?php 

    class Senhas extends Dbc {

        protected function cadastrarSenha($nome, $senha, $nivel){
            $sql_prepare = "SELECT * FROM usuario_senha WHERE nome = ?";
            $stmt_prepare = $this->connect()->prepare($sql_prepare);
            $stmt_prepare->execute([$nome]);
            $dados = $stmt_prepare->rowCount();

            if($dados == 0){

                $prepare_senha = password_hash($senha, PASSWORD_DEFAULT);
                $senha = $prepare_senha;
                $sql = "INSERT INTO usuario_senha(nome, senha, nivel) VALUES (?,?,?)";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([$nome, $senha, $nivel]);
                if($stmt){
                    echo "<script>alert('Success')</script>";
                }
            } else{
                echo "<script>alert('Nome de usuario indisponivel')</script>";
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

        protected function loginSenhas($nome, $senha) {
            $sql = "SELECT * FROM usuario_senha WHERE nome = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$nome, ]);
            $dados = $stmt->rowCount();

            if($dados >= 1){
                $row = $stmt->fetchAll();
                $nome_db = $row[0]['nome'];
                $senha_db = $row[0]['senha'];
                $nivel_db = $row[0]['nivel'];

                if(password_verify($senha, $row[0]['senha'])) {
                } 
                
                if ($nome == $nome_db && password_verify($senha, $senha_db) && $nivel_db == 'admin') {
                    
                    $_SESSION['usuario'] = $nome_db;
                    $_SESSION['senha'] = $senha_db;
                    $_SESSION['logged'] = True;
                    
                    header('Location: cadastro_senhas.php');
                } else{
                    echo "<script>alert('Nome, senha Incorreto ou nivel inferior')</script>";
                }
            } 

        }
    }