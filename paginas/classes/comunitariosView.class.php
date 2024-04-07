<?php 

    class ComunitariosView extends Comunitarios {

        public function getComunitarioView() {
            $results = $this->getComunitario();

            if(is_array($results)){
          
          foreach($results as $result){
             
          ?>
            
            <tr>
                <td class="nome"><?php echo ucfirst($result['nome']).' '.ucwords($result['apelido'])?></td>
                <td class="valores"><?php echo $result['escalao']?></td>
                <td class="valores"><?php echo $result['endereco']?></td>
                <td class="valores"><?php echo $result['contacto']?></td>
                <td class="valores ver-mais"><a href="editar_lr.php?id=<?php echo $result['id']?>"><img src="../imagens/latadelixoicone.png" class="icone" alt=""></a><a href="prompt-comunitarios.php?id=<?php echo $result['id']?>"><img src="../imagens/latadelixoicone.png" class="icone" alt=""></a></td>
              </tr>
            </form>

        <?php 
          }
        
        } else if($results == 0){
            echo "<tr><td>Nenhum resultado encontrado</td></tr>";
        }
        }

        public function getComunitarioViewPublico() {
            $results = $this->getComunitario();

            if(is_array($results)){
          
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
        } else if($results == 0){
            echo "<tr><td>Nenhum resultado encontrado</td></tr>";
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
                    <label for="">Escalao</label>
                    <input type="text" name="escalao" value="<?php echo $result['escalao']?>" required>
                </div>
                <div class="input-box">
                    <label for="">Endereco</label>
                    <input type="text" name="endereco" value="<?php echo $result['endereco']?>" required>
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