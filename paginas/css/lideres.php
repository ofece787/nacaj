<?php 
    header('Content-type: text/css; Charset: UTF-8');

?>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    border: none;
    outline: none;
    font-family: sans-serif;
}
body{
    background-color: #00ffff;
    display: flex;
    align-items: center;
    justify-content: center;
}
main{
    padding: 5px;
}
.botao{
    padding: 20px;
}
.form{

    position: relative;
    display: flex;
    flex-direction: column;
    padding: 20px;
    border-radius: 10px 10px 20px 10px;
    background: #fff;
    max-width: 600px;
    margin: 5px;
}
.form h2{
    font-size: 1.6em;
    color: #1b1b1b;
    padding-bottom: 10px;
    text-align: center;
}
.form .fechar{
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 4px;
    right: 4px;
    background: red;
    height: 35px;
    width: 35px;
    border-radius: 50%;
    cursor: pointer;
}
.form .fechar .x{
    background: #fff;
    width: 4px;
    height: 25px;
    transform: rotate(45deg);
}
.form .fechar .x::after{
    position: absolute;
    content: '';
    background: #fff;
    width: 4px;
    height: 25px;
    transform: rotate(90deg);
}
.input-box{
    position: relative;
    width: 100%;
    height: 40px;
    margin-bottom: 40px;
}
.input-box label{
    font-weight: 500;
    pointer-events: none;
    font-weight: 1.2em;
}
.input-box input{
    width: 100%;
    height: 100%;
    border-radius: 5px;
    padding: 0 10px;
    background: transparent;
    border: 2px solid #c0c0c0;
    font-size: 1em;
}
#na{
    display: flex;
}
#na .input-box{
    margin-right: 5px;
}
form{
    display: flex;
    flex-direction: column;
}
.data{
    display: flex;
    margin-right: 20px;
}
.data input{
    width: 100px;
    height: 30px;
}
#submit{
    background: #252525;
    color: #fff;
    height: 35px;
    border-radius: 3px;
    font-size: 1em;
    cursor: pointer;
}
.apagar{
    display: none;
}
.imagem{
    display: flex;
    align-items: center;
    height: 10px;
    padding: 10px;
}
.imagem .foto input{
    width: 150px;
}
.imagem .botao input{
    background: #00ffff;
    padding: 5px 10px;
    border-radius: 10px;
}