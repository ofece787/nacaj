<?php 

    class ReligiososView extends Religiosos {

        public function getReligiosoView() {
            $results = $this->getReligioso();
          
            foreach($results as $result){
             
          ?>
            
              <tr>
                <td><?php echo ucfirst($result['nome']).' '.ucwords($result['apelido'])?></td>
                <td class="valores"><?php echo $result['igreja']?></td>
                <td class="valores"><?php echo $result['religiao']?></td>
                <td class="valores"><?php echo $result['escalao']?></td>
                <td class="valores"><?php echo $result['bairro']?></td>
                <td class="valores"><?php echo $result['contacto']?></td>
                <td class="valores ver-mais">
                  <a href="editar_r.php?id=<?php echo $result['id']?>"><img src="../imagens/latadelixoicone.png" class="icone" alt=""></a>
                  <a href="delete_l.php?id=<?php echo $result['id']?>"><img src="../imagens/latadelixoicone.png" class="icone" alt=""></a></td>
              </tr>
            </form>
          <?php 
          }
        }

        public function getReligiosoViewPublico() {
          $results = $this->getReligioso();
        
          foreach($results as $result){
           
        ?>
          
              <tr>
                <td><?php echo ucfirst($result['nome']).' '.ucwords($result['apelido'])?></td>
                <td class="valores"><?php echo $result['igreja']?></td>
                <td class="valores"><?php echo $result['religiao']?></td>
                <td class="valores"><?php echo $result['escalao']?></td>
                <td class="valores"><?php echo $result['bairro']?></td>
                <td class="valores"><?php echo $result['contacto']?></td>
              </tr>
            </form>
          <?php 
          }
        }

        public function searchReligiao($nome,$apelido,$igreja,$religiao,$escalao){
            $result = $this->searchReligioso($nome,$apelido,$igreja,$religiao,$escalao);
            
            if(is_array($result)){

              foreach($result as $res){
                
              ?>
            <tr>
              <td><?php echo ucwords($res['nome'].' '.$res['apelido'])?></td>
              <td><?php echo ucwords($res['igreja'])?></td>
              <td><?php echo ucwords($res['religiao'])?></td>
              <td><?php echo ucwords($res['escalao'])?></td>
              <td><?php echo ucwords($res['bairro'])?></td>
              <td><?php echo ucwords($res['contacto'])?></td>
            </tr>

            <?php
              }
            } else if($result == 1){
              echo "<td>Nao encontrado</td>";
            }
            
        }

        public function getReligiosoId($id){
            $results = $this->getReligiosoById($id);
            
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
                      <label for="">Igreja</label>
                      <input type="text" value="<?php echo $result['igreja']?>" name="igreja" id="escalao" required>
                  </div>
                  <div class="dados">
                      <label for="">Religiao</label>
                      <input type="text" value="<?php echo $result['religiao']?>" name="religiao" id="endereco" required>
                  </div>
                  <div class="dados">
                      <label for="">Escalão</label>
                      <input type="text" value="<?php echo $result['escalao']?>" name="escalao" id="escalao" required>
                  </div>
                  <div class="dados">
                      <label for="">Endereço</label>
                      <input type="text" value="<?php echo $result['bairro']?>" name="endereco" id="endereco" required>
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