<?php 

    class FinancasController extends Financas {

        public function updateValue($id,$nome,$apelido,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot){
            $this->upValue($id,$nome,$apelido,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot);
        }

        public function log_financas($nome, $senha) {
            $this->logIn_financas($nome, $senha);
        }

        public function setFinanceiro($nome,$apelido,$cargo,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot){
            $this->createFinanceiro($nome,$apelido,$cargo,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot);
        }
    }