<?php 

  class UserController extends User {

    public function createUser($nome,$apelido,$cargo,$mafiliacao,$bi,$bairro,$contacto,$dnascimento,$idadea,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot,$nome_usuario,$nome_editado,$data_modificacao){
      $this->setUser($nome,$apelido,$cargo,$mafiliacao,$bi,$bairro,$contacto,$dnascimento,$idadea,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot,$nome_usuario,$nome_editado,$data_modificacao);
    }

    public function updateValue($nome,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot){
      $this->upValue($nome,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot);
    }

    public function logInDados($nome, $senha) {
      $this->logIn($nome, $senha);
    }

    public function log_financas($nome, $senha) {
      $this->logIn_financas($nome, $senha);
    }

    public function apagarUsuario($id,$nome){
      $this->deleteMember($id,$nome);
    }
    
    public function upMemberId($nome,$apelido,$cargo,$mafiliacao,$bi,$bairro,$contacto,$dnascimento,$id){
      $this->upMember($nome,$apelido,$cargo,$mafiliacao,$bi,$bairro,$contacto,$dnascimento,$id);
    }

    public function senhaDb($nome, $senha){
      $this->cadastrarSenha($nome, $senha);
    }
     
  }