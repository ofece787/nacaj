<?php 
    header('Content-type: text/css; Charset: UTF-8');
?>
section{
    display: flex;
}
.cadastrar{
    display:flex;
    position: relative;
}
.s-voltar{
    display: flex;
    gap: 5px;
}
.s-voltar .botao{
    display: flex;
    padding: 7px 10px;
    border-radius: 10px;
    gap: 5px;
    color: #fff;
    background: green;
}
.seta{
    border: solid 1px #fff;
    border-width: 0 0 2px 2px;
    padding: 5px;
    width: 15px;
    height: 15px;
}
.seta::after{
    content: '';
    background: #fff;
    width: 2px;
    height: 20px;
    position: absolute;
    top: -3px;
    right: 5px;
}