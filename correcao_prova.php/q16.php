<?php
//verifica se as variaveis foram enviada pela url
if(isset($_GET['n1'])&& isset($_GET['n2'])){
    //pega valor variavel
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    //verifica quem é o maior valor
    if($n1 > $n2){
        echo "$n1 é o maior valor";
    }else if($n2 > $n1){
        echo "$n2 é o maior valor";
    }else{
        echo "os valores são iguais";
    }
}else{
    echo "impossível prosseguir";
}