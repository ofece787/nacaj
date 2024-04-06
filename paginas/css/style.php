<?php 
    header('Content-type: text/css; Charset: UTF-8')
?>

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    text-decoration: none;
}
body{
    background: #00ffff;
}

a{
    color: #1b1b1b;
}
.voltar{
    width: 30px;
}
.icone .voltar{
    width: 15px;
    height: 20px;
}
@media(min-width: 700px){


    header{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    header h2{
        color: #fff;
    }
    header .selected{
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    header .not_selected{
        background: orange;
        color: #fff;
        display: flex;
        align-items: center;
    }
    .p-desk{
        display: flex;
        height: 30px;
    }
    .p-desk a{
        border-radius: 20px;
        padding: 0 10px;
        margin-left: 5px;
    }
    .menu img{
        display: none;
    }
    .menu1 img{
        display: none;
    }
    main .caixa{
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    
    }
    main .caixa-mobile{
        display: none;
    }
    .links{
        width: 100%;
        display: flex;
    }
    
    .dados{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 5px;
    }
    .apagar{
        background: red;
        padding: 10px;
        border-radius: 10px;
        color: #fff;
    }
    
    .foto{
        display: flex;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }
    
    table{
        padding: 10px;
    }
    
    thead tr td{
        font-weight: bold;
        font-size: 1.3em;
    }
    table tr td{
        padding: 5px;
    }
    tbody tr td{
        font-size: 1.1em;
    }
    
    .cadastrar{
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #808080;
        width: 100%;
    }
    .volta a div{
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #808080;
        color: #fff;
    }
    
    .sair{
        display: flex;
        align-items: center;
        gap: 10px;
        border: 1px solid #808080;
        border-radius: 15px;
        padding: 5px;
    }
    .sair .logout{
        background: red;
        padding: 5px 10px;
        border-radius: 10px;
        color: #fff;
    }

    
    /*pesquisa de dados*/
    .pesquisa{
        width: 500px;
        margin-right: 10px;
    }
    /*pesquisa de dados*/
    
    .caixa-total{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 95%;
    }
    
    .opcoes{
        display: flex;
        justify-content: center;
        gap: 10px;
        
    }
    .editar{
        background: green;
        padding: 5px 10px;
        border-radius: 10px;
        color: #fff;
    }
    .apagar{
        padding: 5px 10px;
        background: red;
        border-radius: 10px;
        color: #fff;
    }
    .religiosos{
        padding: 10px;
        display: flex;
        align-items: center;
    }
}