<?php 

    class ComunitariosView extends Comunitarios {

        public function getComunitarioView() {
            $results = $this->getComunitario();
          
          foreach($results as $result){
             
          ?>
            
            <tr>
                <td class="nome"><?php echo ucfirst($result['nome']).' '.ucwords($result['apelido'])?></td>
                <td class="valores"><?php echo $result['escalao']?></td>
                <td class="valores"><?php echo $result['endereco']?></td>
                <td class="valores"><?php echo $result['contacto']?></td>
                <td class="valores ver-mais"><a href="editar_lr.php?id=<?php echo $result['id']?>"><img src="../imagens/latadelixoicone.png" class="icone" alt=""></a><a href="delete_lr.php?id=<?php echo $result['id']?>"><img src="../imagens/latadelixoicone.png" class="icone" alt=""></a></td>
              </tr>
            </form>

        <?php 
        
            }
        }

        public function getComunitarioViewPublico() {
            $results = $this->getComunitario();
          
          foreach($results as $result){
             
          ?>
            
            <tr>
                <td class="nome"><?php echo ucwords($result['nome']).' '.ucwords($result['apelido'])?></td>
                <td class="valores"><?php echo $result['escalao']?></td>
                <td class="valores"><?php echo $result['endereco']?></td>
                <td class="valores"><?php echo $result['contacto']?></td>
              </tr>
            </form>

        <?php 
        
            }
        }

        public function searchComunity($nome,$apelido,$cargo){
            $result = $this->searchComunitario($nome,$apelido,$cargo);
            if (is_array($result)){
                foreach($result as $res){
                echo "<tbody>";
                echo "<td>".$res['nome'].' '.$res['apelido']."</td>";
                echo "<td>".$res['escalao'].'</td>';
                echo "<td>".$res['endereco'].'</td>';
                echo "<td>".$res['contacto'].'</td>';
                echo "</tbody>";
                }
            } else if($result ==1){
                echo "<td>Nao encontrado</td>";
            }
        }

        public function getComunitarioId($id){
            $results = $this->getComunitarioById($id);
            
            foreach($results as $result) {
              ?>

            <form action="" method="post" id="form1">
              <div class="caixapre">
                  <div class="nomes">
                      <div class="dados">
                          <label>Nome</label>
                          <input type="text" value="<?php echo $result['nome']?>" name="nome" id="nome" required>
                      </div>
                      <div class="dados">
                          <label for="">Apelido</label>
                          <input type="text" value="<?php echo $result['apelido']?>" name="apelido" id="apelido" required>
                      </div>
                  </div>
                  <div class="dados">
                      <label for="">Escalão</label>
                      <input type="text" value="<?php echo $result['escalao']?>" name="escalao" id="escalao" required>
                  </div>
                  <div class="dados">
                      <label for="">Endereço</label>
                      <input type="text" value="<?php echo $result['endereco']?>" name="endereco" id="endereco" required>
                  </div>
                  <div class="dados">
                      <label for="">Contacto</label>
                      <input type="number" value="<?php echo $result['contacto']?>" name="contacto" id="contacto" required>
                  </div>
              </div>

              <input type="submit" value="Cadastrar" form="form1" id="botao">
          </form>
          <?php
            }
        }

        
    }

?>