<?php 

    class ComunitariosController extends Comunitarios {

        public function deleteLeader($id){
            $this->deleteComunitarios($id);
        }

        public function upComunitario($id, $nome, $apelido, $escalao, $endereco, $contacto) {
            $this->updateComunitario($id, $nome, $apelido, $escalao, $endereco, $contacto);
        }

        public function addLeader($nome,$apelido,$escalao,$endereco,$contacto){
            $this->setLeader($nome,$apelido,$escalao,$endereco,$contacto);
        }
    }

?>