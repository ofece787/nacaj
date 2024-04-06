<?php

    include('dados_login.php');
    $logged = $_SESSION['logged'] ??null;
    if (!$logged) die('Voce precisa estar logado para acessar esta pagina <a href="../index.php">Log In</a>');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Membros</title>
    <link rel="stylesheet" href="css/style.php">
    <link rel="stylesheet" href="css/membros_css.php">
    <script src="javascript/jquery/code.jquery.com_jquery-3.7.0.min.js"></script>
</head>
<body>
    <section class="form">
        <div class="titulo-formulario">
            <h2>Cadastro de Membros</h2>
        </div>
        <a href="painel_admin.php">
            <div class="fechar">
                <div class="x"></div>
            </div>
        </a>
        <div class="formulario">
            <form action="" method="post"  enctype="multipart/form-data">

                <div class="input-box" id="na">
                    <div class="input-box">
                        <label for="">Nome</label>
                        <input type="text" name="nome" id="" required>
                    </div>
                    <div class="input-box">
                        <label for="">Apelido</label>
                        <input type="text" name="apelido" id="" required>
                    </div>
                </div>


                <div class="input-box">
                    <label for="">Cargo</label>
                    <input type="text" name="cargo" required>
                </div>
                <div class="input-box">
                    <label for="">Data de nascimento</label>
                    <div class="data">
                        <select name="dia" id="" required>
                            <option value="">Dia</option>
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
                            <option value="">Mês</option>
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
                        <input type="number" name="ano" id="" required>
                    </div>
                </div>

                <div class="input-box">
                    <label for="">Data de Afiliação</label>
                    <div class="data">
                        <select name="dia1" id="" required>
                            <option value="">Dia</option>
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
                            <option value="">Mês</option>
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
                        <input type="number" name="ano1" id="" required>
                    </div>
                </div>

                <div class="input-box">
                    <label for="">BI</label>
                    <input type="text" name="bi" required>
                </div>

                <div class="input-box">
                    <label for="">Bairro</label>
                    <input type="text" name="bairro" required>
                </div>

                <div class="input-box">
                    <label for="">Contacto</label>
                    <input type="text" name="contacto" required>
                </div>
            
                <input id="submit" type="submit" name="sub" value="Cadastrar">
            </form>
        </div>
    </section>


    <?php 
        if(isset($_POST['sub'])){
            $nome = $_POST['nome'];
            $nome_usuario = $_SESSION['usuario'];
            $apelido = $_POST['apelido'];
            $cargo = $_POST['cargo'];
            $bi = $_POST['bi'];
            $bairro = $_POST['bairro'];
            $contacto = $_POST['contacto'];
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $ano = $_POST['ano'];
            $dia1 = $_POST['dia1'];
            $mes1 = $_POST['mes1'];
            $ano1 = $_POST['ano1'];
            $data = date('Y');
            $data_dia = date('Y-m-d');
            $data_hora = date('h:i:s');
            $data_modificacao = $data_dia.' '.$data_hora;
            
            $nome_editado = $nome.' '.$apelido;
            $idadea = $data - $ano;
            $mafiliacao = $ano1.'-'.$mes1.'-'.$dia1;
            $dnascimento = $ano.'-'.$mes.'-'.$dia;

            $data_modificacao = $data_dia.' '.$data_hora;
            
            $nome_editado = $nome.' '.$apelido;
            $jan = 0;
            $fev = 0;
            $mar = 0;
            $abr = 0;
            $mai = 0;
            $jun = 0;
            $jul = 0;
            $ago = 0;
            $set = 0;
            $out = 0;
            $nov = 0;
            $dez = 0;
            $tot = 0;

            $membro = new UserController();
            $membro->createUser($nome,$apelido,$cargo,$mafiliacao,$bi,$bairro,$contacto,$dnascimento,$idadea,$jan,$fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$tot,$nome_usuario,$nome_editado,$data_modificacao);

        }
    ?>


    <script src="javascript/jquery/script.js"></script>
</body>
</html>