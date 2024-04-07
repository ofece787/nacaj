<?php 
    include 'dados_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/financas_css.php">
    <link rel="stylesheet" href="css/style.php">
</head>
<body>
    <main>
        
        <section>
            <div class="volta">
                <div class="s-voltar">
                    <a href="financas.php">
                        <div class="botao">
                            <img src="../imagens/backarrow.png" class="voltar" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <h2>Atualizacao de dados financeiros</h2>
            <section class="second">
                <table>
                    <thead>
                        <th>
                            <tr>
                                <td>Nome</td>
                                <td>Apelido</td>
                                <td>Janeiro</td>
                                <td>Fevereiro</td>
                                <td>Marco</td>
                                <td>Abril</td>
                                <td>Maio</td>
                                <td>Junho</td>
                                <td>Julho</td>
                                <td>Agosto</td>
                                <td>Setembro</td>
                                <td>Outubro</td>
                                <td>Novembro</td>
                                <td>Dezembro</td>
                            </tr>
                        </th>
                    </thead>
                    <tbody>
                    <?php
                        $display = new UserView();
                        $display->getUsers();
                    ?>
                    </tbody>
                </table>
            </section>
        </section>
    </main>
    <?php 
        $user = new UserController();

        if(isset($_POST['atualizar']) && $_POST['nome_at']){

            $nome = $_POST['nome_at'];
            $apelido = $_POST['apelido'];
            $jan = $_POST['janeiro'];
            $fev = $_POST['fevereiro'];
            $mar = $_POST['marco'];
            $abr = $_POST['abril'];
            $mai = $_POST['maio'];
            $jun = $_POST['junho'];
            $jul = $_POST['julho'];
            $ago = $_POST['agosto'];
            $set = $_POST['setembro'];
            $out = $_POST['outubro'];
            $nov = $_POST['novembro'];
            $dez = $_POST['dezembro'];
            $total = 0;
            $user->updateValue($nome, $apelido, $jan, $fev,$mar,$abr,$mai,$jun,$jul,$ago,$set,$out,$nov,$dez,$total);

            
        }
        ?>
</body>
</html>