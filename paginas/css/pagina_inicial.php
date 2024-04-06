<?php 
    header('Content-type: text/css; Charset: UTF-8');
?>
@media (min-width: 700px) {

    header{
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 200px;
        z-index: 1000;
    }
    .opcoes{
        height: 100%;
        width: 100%;
        background: #1b1b1b;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        padding: 5px;
    }
    main{
        background: #fff;
        position: absolute;
        left: 200px;
        height: 100%;
        width: calc(100% - 200px);
    }
    .seccao_principal .exp{
        display: flex;
        flex-direction: row;
        aling-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        height: 100%;
    }

    .menu{
        display: none;
    }
    .menu1{
        display: none;
    }
    .menu img{
        display: none;
    }
    .menu1 img{
        display: none;
    }




}