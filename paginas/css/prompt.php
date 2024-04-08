<?php 
    header('Content-type: text/css; Charset: UTF-8');
?>

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none;
}
body{
    background: #00ffff;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

main{
    background: #00ffff;
    box-shadow: 1px 1px 10px #808080, -2px 2px 10px #808080;
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0 5px;
    font-size: 1.2em;
}
main section{
    width: 100%;
    display: flex;
}

.caixa{
    display: flex;
    flex-direction: column;
    align-items: center;
    background: #fff;
    max-width: 400px;
    max-height: 300px;
    border-radius: 10px;
}
.caixa section{
    display: flex;
    justify-content: space-around;
    margin: 40px 0;
    padding: 10px 30px;
}
div{
    padding: 10px 20px;
}
div h2{
    font-size: 1.1em;

}
.sim{
    background: red;
    border-radius: 10px;
    color: #fff;
}
.nao{
    background: green;
    border-radius: 10px;
    color: #fff;
}
.form{

    position: relative;
}
form{
    background: #fff;
    padding: 20px;
    border-radius: 10px;
}
form label{
    font-size: 1.2em;
}
.caixa-login{
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.caixa-login input{
    border: 1px solid #808080;
    border-radius: 5px;
    padding: 5px;
    font-size: 1.1em;
}
form .nao{
    padding: 10px;
    border: none;
    width: 100%;
    margin-top: 10px;
}

.fechar{
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 4px;
    right: 4px;
    background: red;
    padding: 5px;
    border-radius: 50%;
    cursor: pointer;
}

.voltar{
    transform: rotate(45deg);
}