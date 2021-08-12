<?php

if(isset($_REQUEST["nome"]) && isset($_REQUEST["nota1"]) && isset($_REQUEST["nota2"]) && isset($_REQUEST["nota3"]) && ($sabePOO == true){
   
    $nome = $_REQUEST["nome"];
    $nota1 = $_REQUEST["nota1"];
    $nota2 = $_REQUEST["nota2"];
    $nota3 = $_REQUEST["nota3"];

    echo "Aluno cadastrado" 
}else{
    "Aluno não cadastrado";
}

    echo "<br><br>";
    
    $nome = "ANA";
    $nota1 = 9;
    $nota2 = 8;
    $nota3 = 10;
    
    $media = ($nota1 + $nota2 + $nota3) / 3;
    
    echo "A média é: $media";
    
    echo "<br><br>";