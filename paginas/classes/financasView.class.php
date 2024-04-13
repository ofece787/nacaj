<?php 

    class FinancasView extends Financas {

        public function getUsersNoUp(){
            $results = $this->getUser();
            
            foreach($results as $result){
               
            ?>
              
                <tr>
                  <td class="nome"><?php echo ucwords($result['nome']).' '.ucwords($result['apelido']);?></td>
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
            <?php 
            }
        }

        public function getUsers(){
            $results = $this->getUser();
            
            foreach($results as $result){
               
            ?>
              
                <form action="" method="post">
                  <tr>
                    <td class="id"><input type="text" hidden name="id" value="<?php echo $result['id']?>"></input></td>
                    <td class="nome"><input type="text" name="nome_at" value="<?php echo $result['nome']?>"></td>
                    <td class="nome"><input type="text" name="apelido" value="<?php echo $result['apelido']?>"></td>
                    <td class="nome"><input type="text" name="cargo" value="<?php echo $result['cargo']?>"></td>
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
                    <td id="submit"><button type="submit" name="atualizar"><img src="../imagens/plussign.png" class="icone" alt=""></td>
                  </tr>
                </form>
            <?php 
            }
        }

        public function getFinancasSearch($nome,$apelido){
            $results = $this->searchFinancas($nome,$apelido);

            if(is_array($results)){
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
                <?php 
                }
            } elseif($results == 0){
              echo "<p>Nenhum resulto encontrado</p>";
            }
        }

        public function getAtFinancasSearch($nome,$apelido){
            $results = $this->searchFinancas($nome, $apelido);
            if(is_array($results)){
                foreach($results as $result){
                ?>  

                <tr>
                  <td class="nome"><input type="text" value="<?php echo $result['nome']?>" name="nome"></td>
                  <td class="nome"><input value="<?php echo $result['apelido']?>" name="apelido"></td>
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
                </tr>
                
                <?php
                }
            } elseif($results == 0){
              echo "<p>Nenhum resultado encontrado</p>";
            }
        }
    }

?>