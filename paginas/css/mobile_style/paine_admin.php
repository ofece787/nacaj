<?php 
    header('Content-type: text/css; Charset: UTF-8');
    ?>

@media(max-width: 700px){
    .menu{
        cursor: pointer;
        display: flex;
        justify-content: center;
        position: absolute;
        top: 10px;
        right: 10px;
        background: #808080;
        height: 30px;
        width: 30px;
        border-radius: 50%;
    }
    .menu img{
        height: 10px;
        width: 20px;
        margin-top: 10px;
    }
    .desk{
        display: none;
    }
    .p-desk{
        display: none;
    }
    .nome{
        min-width: 200px;
    }
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
}
.opcoes{
    position: relative;
    padding: 1px;
    display: flex;
    align-items: center;
    justify-content: center;
}
header{
    background: #1b1b1b;
    color: #fff;
    padding: 5px;
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 10000;
}
main{
    padding: 0 0 5px 0;
    margin-top: 60px;
    margin-bottom: 30px;
}

.opcoes .logo{
    display: flex;
    align-items: center;
}
.opcoes .lista{
    top: -200px;
    height: 0;
}
.opcoes .active{
    z-index: 1000;
    background: #808080;
    border-radius: 10px;
    padding: 10px;
    display: flex;
    flex-direction: column;
    position: absolute;
    bottom: -170px;
    right: 0;
}
.opcoes .active a{
    background: #c0c0c0;
    padding: 5px;
    border-radius: 5px;
    margin: 5px 2px;
    display: flex;
    color: #fff;
}
.opcoes .active a.selected{
    background: #fff;
    color: #1b1b1b;
}
.opcoes .active a img{
    margin-right: 10px;
}
.opcoes .active a:hover{
    background: #e0e0e0;
    color: #1b1b1b;
}
.opcoes .active div .icone{
    margin-right: 10px;
}
.cadastrar{
    background: #1b1b1b;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 5px;
}
.radius{
    border-radius: 0px 0px 20px 20px;
}
.pesquisa{
    position: relative;
    margin-left: 15px;
    width: 100%;
}
#campo{
    background: transparent;
    color: #fff;
    border-radius: 20px;
    border: solid 2px #808080;
    outline: none;
    padding: 7px 15px;
    width: 100%;
    font-size: 1.1em;
}
.botaoSearch{
    background: #808080;
    border: none;
    position: absolute;
    top: 4.5px;
    right: 4.5px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    padding: 8px;
    cursor: pointer;
}
.botao{
    display: flex;
    align-items: center;
    justify-content: center;
    background: #808080;
    border-radius: 50%;
    width: 30px;
    height: 30px;
}


/*body style*/

.caixa-total{
    background: #fff;
    border-radius: 10px;
    margin: 10px;
    padding: 10px;
    border-right: solid 1px #1b1b1b;
    border-bottom: solid 1px #1b1b1b;
    overflow: auto;
}

thead tr td{
    background: orange;
    color: #fff;
    border-radius: 10px;
    padding: 5px 10px;
    font-weight: bold;
    font-size: 1.2em;
}
tbody tr td{
    background: #c0c0c0;
    border-radius: 10px;
    padding: 5px 10px;
    font-size: 1.09em;
}


main .caixa-mobile{
    position: fixed;
    bottom: 0;
    width: 100%;
}
main .caixa-mobile .plus-btn{
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    border-radius: 20px;
    padding: 5px;
}
main .caixa-mobile .plus-btn:hover{
    background: #808080;
}

.active .selected{
    background: #fff;

}

.s-voltar{
    display: flex;
    align-items: center;
    gap: 5px;
}
.s-voltar a{
    color: #fff;
    overflow: hidden;
}
