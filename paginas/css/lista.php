<?php 
    header('Content-type: text/css; Charset: UTF-8');
?>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    text-decoration: none;
    color: #000;
    font-family: sans-serif;
}
body{
    background: #c0c0c0;
}
.caixa-apagar{
    position: absolute;
    min-height: 100vh;
    background: rgba(255,255,255,0.2);
}

.apagar{
}

.foto{
    display: flex;
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
.infos{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
}
.descricao{
    display: flex;
    flex-direction: column;
}
a{
    background: #fff;
    display: flex;
    gap: 20px;
    width: 50%;
    border-radius: 40px;
    padding: 10px;
}
.dados{
    display: flex;
}