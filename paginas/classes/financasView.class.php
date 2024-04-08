<?php 

    class FinancasView extends Financas {

        public function getUsersNoUp(){
            $results = $this->getUser();
            
            foreach($results as $result){
               
            ?>
              
                <tr>
                  <td class="nome"><?php echo ucfirst($result['nome'].' '.$result['apelido']);?></td>
                  <td class="valores"><?php echo $result['janeiro']?></td>
                  <td class="valores"><?php echo $result['fevereiro']?></td>
                  <td class="valores"><?php echo $result['marco']?></td>
                  <td class="valores"><?php echo $result['abril']?></td>
                  <td class="valores"><?php echo $result['maio']?></td>
                  <td class="valores"><?php echo $result['junho']?></td>
                  <td class="valores"><?php echo $result['julho']?></td>
                  <td class="valores"><?php echo $result['agosto']?></td>
                  <td class="valores"><?php echo $result['setembro']?></td>
                  <td class="valores"><?php echo $result['outubro']?></td>
                  <td class="valores"><?php echo $result['novembro']?></td>
                  <td class="valores"><?php echo $result['dezembro']?></td>
                  <td class="valores"><?php echo $result['total']?></td>
                </tr>
              </form>
            <?php 
            }
        }

        public function getUsers(){
            $results = $this->getUser();
            
            foreach($results as $result){
               
            ?>
              <form action="" method="post">
              
                <tr>
                  <td><input type="text" value="<?php echo ucfirst($result['nome']).' '.ucfirst($result['apelido'])?>" name="apelido"></td>
                  <td class="valores"><input type="number" name="janeiro" id="" value="0" min="0" max="50"></td>
                  <td class="valores"><input type="number" value="0" name="fevereiro" min="0" max="50"></td>
                  <td class="valores"><input type="number" name="marco" id="" value="0" min="0" max="50"></td>
                  <td class="valores"><input type="number" name="abril" id="" value="0" min="0" max="50"></td>
                  <td class="valores"><input type="number" name="maio" id="" value="0" min="0" max="50"></td>
                  <td class="valores"><input type="number" value="0" name="junho" min="0" max="50"></td>
                  <td class="valores"><input type="number" name="julho" id="" value="0" min="0" max="50"></td>
                  <td class="valores"><input type="number" name="agosto" id="" value="0" min="0" max="50"></td>
                  <td class="valores"><input type="number" name="setembro" id="" value="0" min="0" max="50"></td>
                  <td class="valores"><input type="number" value="0" name="outubro" min="0" max="50"></td>
                  <td class="valores"><input type="number" name="novembro" id="" value="0" min="0" max="50"></td>
                  <td class="valores"><input type="number" name="dezembro" id="" value="0" min="0" max="50"></td>
                  <td class="border_less"><input type="submit" class="botao" value="Atualizar" name="atualizar"></td>
                </tr>
              </form>
            <?php 
            }
        }
    }

?>