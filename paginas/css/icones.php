<?php 
    header('Content-type: text/css; Charset: UTF-8');
?>

/*Icone de membros*/
.plus{
    width: 20px;
}
.icone{
    width: 15px;
}
.logo img{
    width: 50px;
    height: 50px;
}
.membros{
    display: flex;
    align-items: baseline;
    gap: 5px;
}
.person{
    position: absolute;
    top: 5px;
    position: relative;
    width: 15px;
    height: 10px;
    border: solid 1px #1b1b1b;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.person::after{
    content: '';
    position: absolute;
    bottom: 10px;
    right: 2px;
    border: 1px solid #1b1b1b;
    border-radius: 50%;
    width: 7px;
    height: 7px;
}

.light{
    border: #fff solid 1px;
}
.light::after{
    border: 1px solid #fff;
}

.religiosos{
    display: flex;
    gap: 10px;
    align-items: center;
}
.religiosos-icone{
    background: #1b1b1b;
    height: 20px;
    border-radius: 5px;
}
.religiosos-icone::after{
    position: absolute;
    transform: rotate(90deg);
    content: '';
    background: #1b1b1b;
    height: 12px;
    width: 2px;
}

.comunitarios{
    display: flex;
    align-items: baseline;
    gap: 5px;
}

.comunitarios-icone{
    position: relative;
    position: absolute;
    top: 0px;
    left: 8px;
    border: solid #1b1b1b;
    border-width: 2px 2px 0 0;
    padding: 5px;
    transform: rotate(135deg);
}
.comunitarios-icone::before{
    content: '';
    position: absolute;
    bottom: 6px;
    left: -3px;
    width: 20px;
    height: 2px;
    background: #1b1b1b;
    transform: rotate(45deg);
}
.comunitarios-icone::after{
    content: '';
    position: absolute;
    bottom: 10px;
    left: 10px;
    background: #1b1b1b;
    width: 12px;
    height: 12px;
    border-radius: 50%;
}
.not_selected .comunitarios-icone::before{
    background: #fff;
}
.not_selected .comunitarios-icone{
    border: #fff;
    padding: 10px;

}

.not_selected .comunitarios-icone::after{
    background: #fff;
}
