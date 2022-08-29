<?php

function QuebraLinha()
{

    echo "<br>";
}
function ImprimirTexto($texto)
{
    echo $texto;
    QuebraLinha();

}
function Adicao($numero1, $numero2){
    return $num1 + $num2;
}
function Media($numero1, $numero2){

    return Media( $numero1 + $numero2) / 2;
}
function Subtracao($numero1, $numero2){

    return Subtracao( $numero1 - $numero2);
}
function Multiplicacao($numero1, $numero2){

    return Multiplicacao( $numero1 * $numero2);
}
function Divisao($numero1, $numero2){

    return Divisao( $numero1 / $numero2);
}
function Resto($numero1, $numero2){

    return Resto( $numero1%2);
}

ImprimirTexto (Adicao(10,12));
ImprimirTexto ("Media 8 e 7 =". Media (8,7));
ImprimirTexto (Subtracao(20,12));
ImprimirTexto (Multiplicacao(2,9));
ImprimirTexto (Divisao(50,2));//25
ImprimirTexto (Resto(3,2));//1

//Faça uma função que receba 3 parametros que são:
//dois numeros,uma operação referente ao calculo
//imprima na tela
//Faça uma validação se a operação é válida
//O nome da função deve ser LendariaCalculadora

function LendariaCalculadora($numero1, $numero2, $operacao)
{
    $resultado = 0; 
    if($operacao == "+"){
         $resultado = Adicao($numero1, $numero2);
    }else if($operacao == "-"){
        $resultado = Subtracao($numero1, $numero2);
    }else if($operacao == "*"){
        $resultado = Multiplicacao($numero1, $numero2);
    }else if($operacao == "/"){
        $resultado = Divisao($numero1, $numero2);
    }else if($operacao == "M"){
        $resultado = Media($numero1, $numero2);
    }else if($operacao == "R"){
        $resultado = Resto($numero1, $numero2);
    }else{
        $resultado = "Operação Invalida";
    }
    ImprimirTexto($resultado);

}

LendariaCalculadora(20,10,"M");//15
LendariaCalculadora(20,10,"-");//10
LendariaCalculadora(20,10,"+");//30
LendariaCalculadora(20,10,"/");//2
LendariaCalculadora(20,10,"R");//0
LendariaCalculadora(20,10,"*");//200

ImprimirTexto("Minha chamada da função");
QuebraLinha();
ImprimirTexto("2º");
QuebraLinha();
ImprimirTexto("Terceira");
QuebraLinha();
ImprimirTexto("Quarta vez que eu chamo");
QuebraLinha();
ImprimirTexto("Ultima chamada");
QuebraLinha();


?>