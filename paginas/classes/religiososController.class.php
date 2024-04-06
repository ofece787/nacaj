<?php 

     class ReligiososController extends Religiosos {

        public function upReligioso($nome, $apelido,$igreja,$religiao, $escalao, $endereco, $contacto, $id){
            $this->updateReligioso($nome, $apelido,$igreja,$religiao, $escalao, $endereco, $contacto, $id);
        }

        public function deletePraier($id){
            $this->deleteReligiosos($id);
        }

        public function addPraier($nome,$apelido,$igreja,$religiao,$escalao,$endereco,$contacto){
            $this->setPraier($nome,$apelido,$igreja,$religiao,$escalao,$endereco,$contacto);
        }
    }

?>