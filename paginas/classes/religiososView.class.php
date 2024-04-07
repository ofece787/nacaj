<?php 

    class ReligiososView extends Religiosos {

        public function getReligiosoView() {
            $results = $this->getReligioso();
          
            if(is_array($results)){

            
            foreach($results as $result){
             
          ?>
            
              <tr>
                <td class="nome"><?php echo ucfirst($result['nome']).' '.ucwords($result['apelido'])?></td>
                <td class="valores"><?php echo $result['igreja']?></td>
                <td class="valores"><?php echo $result['religiao']?></td>
                <td class="valores"><?php echo $result['escalao']?></td>
                <td class="valores"><?php echo $result['bairro']?></td>
                <td class="valores"><?php echo $result['contacto']?></td>
                <td class="valores ver-mais">
                  <a href="editar_r.php?id=<?php echo $result['id']?>"><img src="../imagens/latadelixoicone.png" class="icone" alt=""></a>
                  <a href="prompt-lideres.php?id=<?php echo $result['id']?>"><img src="../imagens/latadelixoicone.png" class="icone" alt=""></a></td>
              </tr>
            </form>
          <?php 
          }
        } else if($results == 0){
          echo "<tr><td>Nenhum resultado encontrado</td></tr>";
        }
        }

        public function getReligiosoViewPublico() {
          $results = $this->getReligioso();

          if(is_array($results)){
            
        
          foreach($results as $result){
           
        ?>
          
              <tr>
                <td class="nome"><?php echo ucfirst($result['nome']).' '.ucwords($result['apelido'])?></td>
                <td class="valores"><?php echo $result['igreja']?></td>
                <td class="valores"><?php echo $result['religiao']?></td>
                <td class="valores"><?php echo $result['escalao']?></td>
                <td class="valores"><?php echo $result['bairro']?></td>
                <td class="valores"><?php echo $result['contacto']?></td>
              </tr>
            </form>
          <?php 
          }
        } else if($results == 0) {
          echo "<tr><td>Nenhum resultado encontrado</td></tr>";
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

<div class="input-box" id="na">
                        <div class="input-box">
                            <label for="">Nome</label>
                            <input type="text" name="nome" value="<?php echo $result['nome']?>" required>
                        </div>
                        <div class="input-box">
                            <label for="">Apelido</label>
                            <input type="text" name="apelido" value="<?php echo $result['apelido']?>" required>
                        </div>
                    </div>


                    <div class="input-box">
                        <label for="">Igreja</label>
                        <input type="text" name="igreja" value="<?php echo $result['igreja']?>" required>
                    </div>

                    <div class="input-box">
                        <label for="">Religiao</label>
                        <input type="text" name="religiao" value="<?php echo $result['religiao']?>" required>
                    </div>

                    <div class="input-box">
                        <label for="">Escalao</label>
                        <input type="text" name="escalao" value="<?php echo $result['escalao']?>" required>
                    </div>

                    <div class="input-box">
                        <label for="">Endereco</label>
                        <input type="text" name="endereco" value="<?php echo $result['bairro']?>" required>
                    </div>

                    <div class="input-box">
                        <label for="">Contacto</label>
                        <input type="text" name="contacto" value="<?php echo $result['contacto']?>" required>
                    </div>
                
                    <input id="submit" type="submit" name="sub" value="Cadastrar">
          <?php
            }
        }
    }

?>