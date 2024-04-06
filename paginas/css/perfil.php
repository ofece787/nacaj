<?php 
    header('Content-type: text/css; Charset: UTF-8');
?>

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    border: none;
    outline: none;
    text-decoration: none;
}
body{
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}
section{
    background: #fff;
    padding: 10px;
    max-width: 600px;
    display: flex;
    justify-content: center;
    border-radius: 5px;
}
section .dados{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: space-between;
    width: 100%;
}
section .dados div{
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    background: #c0c0c0;
    border-radius: 5px;
    margin-bottom: 10px;
}
section .dados div span{
    width: 100%;
    text-align: left;
    padding: 5px;
}
section .dados div .negro{
    font-weight: bold;
    background: #808080;
    border-radius: 5px;
}
section .botoes{
    display: flex;
}
.botoes .apagar_membro{
    background: red;
    padding: 5px 10px;
    border-radius: 5px;
}
.botoes .apagar_membro:hover{
    background: #fff;
}
.botoes a .apagar_membro{
    color: #fff;

}
.botoes .editar_membro{
    background: #00ffff;
    padding: 5px 10px;
    border-radius: 5px;
    color: #fff;
}

