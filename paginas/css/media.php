<?php 
    header('Content-type: text/css; Charset: UTF-8');

?>

@media (max-width: 600px){
    .logado{
        display: none;
    }
    header a span{
        display: none;
    }
    header a{
        position: relative;
    }
    header a .membros-icones{
        display: block;
        margin-top: 10px;
    }
    .selected{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        padding: 10px;
    }
    
    .pesquisa{
        position: relative;
    }
    .pesquisa form .campos{
        padding: 20px;
    }
    .pesquisa form .campos input{
        height: 40px;
    }
    .pesquisa form .campos.active{
        position: absolute;
        top: 15px;
        display: flex;
        justify-content: center;
        width: 100%;
    }
    .lupa{
        position: absolute;
        top: -20px;
        left: 0px;
    }

}