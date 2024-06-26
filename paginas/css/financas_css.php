<?php 
    header('Content-type: text/css; Charset: UTF-8');
?>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-style: sans-serif;
}

main .second{
    padding: 0 10px 0 10px;
}
main .second table{
    overflow: auto;
}

h2{
    text-align: center;
}
tbody tr td{
    border: solid 1px #1b1b1b;
    padding: 2px 5px;
    font-size: 1.1em;
}
form tr td{
    border: solid 1px #1b1b1b;
    padding: 2px 5px;
    font-size: 1.1em;
}
table tbody tr td input{
    border: none;
    outline: none;
}
.valores{
    width: 85px;
    background: #fff;
}
table tbody tr td{
    border-radius: 7px;
}
table tbody tr .border_less{
    border: none;
}

main .second form{
    display: flex;
}
table{
    background: #fff;
    border-radius: 10px;
}

.nome{
    min-width: 200px;
    background: #fff;
}
#submit{
    border-radius: 50%;
    background: #808080;
    border: solid 1px #808080;
    height: 30px;
    width: 20px;
}
#submit button{
    display: flex;
    align-items: center;
    justify-content: center;
    background: transparent;
    border: none;
    outline: none;
    width: 10px;
    height: 20px;
    cursor: pointer;
}
.id{
    display: none;
}