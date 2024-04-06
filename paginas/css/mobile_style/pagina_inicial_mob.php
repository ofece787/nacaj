<?php 
    header('Content-type: text/css; Charset: UTF-8');
?>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    color: #000;
    font-size: 1.01em
}

body{
    background: #00ffff;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 10px;
}
main .seccao_principal{
    width: 100%;
    display: flex;
    flex-direction: column;
}
.opcoes .logo{
    display: flex;
    align-items: center;
    gap: 10px;
}
.opcoes .logo img{
    width: 50px;
}
.opcoes .logo h1{
    color: #fff;
    font-family: sans-serif;
}
.links{
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding-top: 7px;
}
.links a{
    color: #fff;
    padding: 4px 7px;
    background: #808080;
    width: 100%;
    border-radius: 5px;
    text-align: center;
    margin-bottom: 10px;
}
.links a:hover{
    color: #fff;
    background: #c0c0c0;
}

.exp{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

.exp div {
    background: #c0c0c0;
    padding: 10px;
    border-radius: 10px;
    width: 250px;
    margin-bottom: 10px;
}
@media (max-width: 700px) {
    main{
        position: absolute;
        background: #fff;
        border-radius: 0px 0px 10px 10px;
        margin: 10px;
    }
    header{
        position: fixed;
        top: 0;
        width: 100%;
        height: 177px;
        z-index: 10000;
    }
    .opcoes{
        background: #1b1b1b;
        border-radius: 0px 0 10px 10px;
        height: 60px;
        overflow: hidden;
        padding: 5px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        transition: 200ms;
    }
    main{
    top: 55px;
    width: 99%;
    border-radius: 0px 0px 10px 10px;
    }
    .menu{
        position: absolute;
        top: 10px;
        right: 20px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        background: #808080;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .menu{
    }
    .menu1{
        position: absolute;
        top: 10px;
        right: 20px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        background: #808080;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .menu img{
        width: 20px;
    }
    .menu1 img{
        width: 20px;
    }
    
}

