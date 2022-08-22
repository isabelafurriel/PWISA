
<link rel="stylesheet" href="estilo.css">

<?php 

echo "Minha mensagem";
echo"<br>";
echo "<h1>Meu HTML</h1>";

$nome = "Isabela";
$idade = 20;
$alturea = 1.61;
$solteiro = true;


$prova1 = 8;
$prova2 = 7.5;
$soma =$prova1 + $prova2;
$media = $soma / 2;

$multiplicacao = $prova1 + $prova2;
$subtracao = $prova1 - $prova2;
 
CONST NOMECOMPLETO = "ISABELA FURRIEL PALONE";
echo "<p>". NOMECOMPLETO. "<p>"; 

$faltas = 23;
echo"<br>";


if($media >= 6 && $faltas  <= 20 ){
    echo"Aprovado";

}else{
    echo "reprovado";
}
$cont = 0;

# < menor
# >= maior e igual
# <= menor ou igual
# === mesmo conteudo e mesmo tipo


$valor = 20;

#valor + valor + 5;
$valor  += 5;
#Resto da divisão(MOD)

#Incremento e decremento 1 em 1
$cont = 0;
$cont++;
$cont--;


do{
    #faça
    $cont++;
    echo $cont."<br>";
}while($cont < 10);

while($cont < 10)
{
    #Faça
}

for ($i = 0; $i < 10; $i++)
{
    if($i % 2 == 0){
        echo $i."É par>";
    }else{
        echo $i."É impar>";
    }

}
?>
