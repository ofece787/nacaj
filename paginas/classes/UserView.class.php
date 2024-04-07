<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

      <?php


        class UserView extends User{
          public function getUsers(){
            $results = $this->getUser();
            
            foreach($results as $result){
               
            ?>
              <form action="" method="post">
              
                <tr>
                  <td><input type="text" value="<?php echo ucfirst($result['nome']);?>" name="nome_at" id=""></td>
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

            public function getUsersNoUp(){
              $results = $this->getUser();
              
              foreach($results as $result){
                 
              ?>
                
                  <tr>
                    <td><?php echo ucfirst($result['nome']);?></td>
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

              public function getMemberView() {
                $results = $this->getMember();
              
                foreach($results as $result){
                 
              ?>
                
                  <tr>
                    <td class="nome"><?php echo ucfirst($result['nome']).' '.ucwords($result['apelido'])?></td>
                    <td class="valores"><?php echo ucwords($result['cargo'])?></td>
                    <td class="valores"><?php echo $result['contacto']?></td>
                    <td class="ver-mais"><a href="informacoes_m.php?id=<?php echo $result['id']?>"><img src="../imagens/olho.png" class="icone" alt=""></a></td>
                  
                  </tr>
                </form>
              <?php 
              }
              }

              public function getMemberViewPublico() {
                $results = $this->getMember();
              
                foreach($results as $result){
                 
              ?>
                
                  <tr>
                    <td class="nome"><?php echo ucfirst($result['nome']).' '.ucwords($result['apelido'])?></td>
                    <td class="valores"><?php echo ucwords($result['cargo'])?></td>
                    <td class="valores"><?php echo $result['contacto']?></td>
                  
                  </tr>
                </form>
              <?php 
              }
              }
               
              

              public function getMemberSearch($nome,$apelido,$cargo) {
                $results = $this->searchMembro($nome,$apelido,$cargo);
                if(is_array($results)){

                  foreach ($results as $result) {
                    
                    ?>
                  <tr>
                    <td><?php echo ucwords($result['nome'].' '.$result['apelido'])?></td>
                    <td><?php echo $result['cargo']?></td>
                    <td><?php echo $result['contacto']?></td>
                    <td><a href="informacoes_m.php?id=<?php echo $result['id'] ?>"><img src="../imagens/olho.png" class="icone" alt=""></a></td>
                  </tr>
                  <?php
                  }
                } else{
                  echo "<td>Nao encontrado</td>";
                }

              }


              public function getMemberEdit($id){
                $results = $this->getMemberById($id);
                foreach ($results as $result) {
                  $ano1 = $result['dnascimento'];
                  $ano_nascimento = explode('-', $ano1);
                  $mes_nascimento = $ano_nascimento[1];
                  $dia_nascimento = $ano_nascimento[2];

                  $ano2 = $result['mesafiliacao'];
                  $ano_afiliacao = explode('-', $ano2);
                  $mes_afiliacao = $ano_afiliacao[1];
                  $dia_afiliacao = $ano_afiliacao[2];
                  ?>
                      <section class="form">
                        <div class="titulo-formulario">
                            <h2>Atualização de Dados</h2>
                        </div>
                        <a href="informacoes_m.php?id=<?php echo $id;?>">
                            <div class="fechar">
                                <div class="x"></div>
                            </div>
                        </a>
                        <div class="formulario">
                            <form action="" method="post"  enctype="multipart/form-data">

                                <div class="input-box" id="na">
                                    <div class="input-box">
                                        <label for="">Nome</label>
                                        <input type="text" value="<?php echo $result['nome']?>" name="nome" id="" required>
                                    </div>
                                    <div class="input-box">
                                        <label for="">Apelido</label>
                                        <input type="text" value="<?php echo $result['apelido']?>" name="apelido" id="" required>
                                    </div>
                                </div>


                                <div class="input-box">
                                    <label for="">Cargo</label>
                                    <input type="text" value="<?php echo $result['cargo']?>" name="cargo" required>
                                </div>
                                
                                <div class="input-box">
                                    <label for="">Data de nascimento</label>
                                    <div class="data">
                                        <select name="dia" id="" required>
                                            <option value="<?php echo $dia_nascimento?>">Dia</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                        <select name="mes" id="" required>
                                            <option value="<?php echo $mes_nascimento?>">Mês</option>
                                            <option value="1">Janeiro</option>
                                            <option value="2">Fevereiro</option>
                                            <option value="3">Março</option>
                                            <option value="4">Abril</option>
                                            <option value="5">Maio</option>
                                            <option value="6">Junho</option>
                                            <option value="7">Julho</option>
                                            <option value="9">Setembro</option>
                                            <option value="10">Outubro</option>
                                            <option value="11">Novembro</option>
                                            <option value="12">Dezembro</option>
                                        </select>
                                        <input type="number" value="<?php echo $ano_nascimento[0];?>" name="ano" id="" required>
                                    </div>
                                </div>
                                <div class="input-box">
                                    <label for="">Data de Afiliação</label>
                                    <div class="data">
                                        <select name="dia1" id="" required>
                                            <option value="<?php echo $dia_afiliacao?>">Dia</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                        <select name="mes1" id="" required>
                                            <option value="<?php echo $mes_afiliacao?>">Mês</option>
                                            <option value="1">Janeiro</option>
                                            <option value="2">Fevereiro</option>
                                            <option value="3">Março</option>
                                            <option value="4">Abril</option>
                                            <option value="5">Maio</option>
                                            <option value="6">Junho</option>
                                            <option value="7">Julho</option>
                                            <option value="8">Agosto</option>
                                            <option value="9">Setembro</option>
                                            <option value="10">Outubro</option>
                                            <option value="11">Novembro</option>
                                            <option value="12">Dezembro</option>
                                        </select>
                                        <input type="number" name="ano1" value="<?php echo $ano_afiliacao[0]?>" id="" required>
                                    </div>
                                </div>
                                
                                <div class="input-box">
                                    <label for="">BI</label>
                                    <input type="text" value="<?php echo $result['bi']?>" name="bi" required>
                                </div>

                                <div class="input-box">
                                    <label for="">Bairro</label>
                                    <input type="text" value="<?php echo $result['bairro']?>" name="bairro" required>
                                </div>

                                <div class="input-box">
                                    <label for="">Contacto</label>
                                    <input type="text" value="<?php echo $result['contacto']?>" name="contacto" required>
                                </div>

                                <input id="submit" type="submit" name="sub" value="Cadastrar">
                            </form>
                        </div>
                    </section>

    
                  <?php 
                  }
                }
        

              public function getMemberId($id) {
                $results = $this->getMemberById($id);
                foreach ($results as $result) {
              ?>
                
                <div><span class="negro">Nome: </span><span><?php echo ucfirst($result['nome']);?></span></div>
                <div class="valores"><span class="negro">Apelido: </span><span><?php echo ucfirst($result['apelido']);?></span></div>
                <div class="valores"><span class="negro">Cargo: </span><span><?php echo ucfirst($result['cargo']);?></span></div>
                <div class="valores"><span class="negro">Data de Afiliacao: </span><span><?php echo $result['mesafiliacao']?></span></div>
                <div class="valores"><span class="negro">BI: </span><span><?php echo $result['bi']?></span></div>
                <div class="valores"><span class="negro">Endereco: </span><span><?php echo $result['bairro']?></span></div>
                <div class="valores"><span class="negro">Contacto: </span><span><?php echo $result['contacto']?></span></div>
                <div class="valores"><span class="negro">Data de Nascimento: </span><span><?php echo $result['dnascimento']?></span></div>
                <div class="botoes">
                  <a href="editar_m.php?id=<?php echo $id?>" class="editar_membro">Editar</a>
                  <a href="prompt.php?id=<?php echo $id?>" class="apagar_membro"><img src="../imagens/latadelixoicone.png" class="voltar" alt=""></a>
                </div>
                
                 
                

              <?php 
                }
              }

              public function getDeleteName($id){
                $result = $this->getMemberById($id);
                echo $result[0]['nome'];
              }

              public function searchMember($nome,$apelido,$cargo) {
                $results = $this->searchMembro($nome,$apelido,$cargo);
                if(is_array($results)){

                  foreach ($results as $result) {
                    
                    ?>
                  <tr>
                    <td><?php echo ucwords($result['nome'].' '.$result['apelido'])?></td>
                    <td><?php echo $result['cargo']?></td>
                    <td><?php echo $result['contacto']?></td>
                  </tr>
                  <?php
                  }
                } else{
                  echo "<td>Nobody found</td>";
                }

              }

            }
          ?> 
    
</body>
</html>