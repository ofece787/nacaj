<?php 


    class SenhasController extends Senhas {
        
        public function senhaDb($nome, $senha, $nivel){
            $this->cadastrarSenha($nome, $senha, $nivel);
        }

        public function logInDados($nome, $senha) {
            $this->logIn($nome, $senha);
        }

        public function loginSenhasDb($nome, $senha){
            $this->loginSenhas($nome, $senha);
        }
    }