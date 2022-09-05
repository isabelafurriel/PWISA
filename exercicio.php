<?php
$numer = array (20 , 15, 30, 17, 8 );

echo "Numero: <ul>";

function exercicio1($numer)
{
    echo "<pre>";
    print_r($numer);
    echo "</pre>";
    
}
exercicio1($numer);
function soma($num)
{
    $soma1 = 0;
    for($i=0; $i<count($num);$i++)
    {
        $soma1 += $num[$i]; 
    }
    return $soma1;
}
    echo soma($numer)."<br>";



/*4-)Utilizando o For imprima a tabuada do 144.*/

for($i = 0; $i <= 10; $i++)
{
    echo "<br>144 X ".$i." = ".( $i * 144 ). "<br>";
}
for ($i=251; $i<545; $i++)
{
    if($i%2==0)
    {
        echo $i . ' ';
    }
}

$numer[5]= rand(-10,10);
$numer[6]= rand(-10,10);
$numer[7]= rand(-10,10);

$pares = 0;
$impares = 0;
$negativos = 0;
$positivos = 0; 
for($i = 0; $i < count($numer); $i++)
{
    if($numer[$i]%2==0){
        $pares++;
     }else 
     { 
        $impares++; 
    }
    if($numer[$i] < 0  ){
        $negativos++;
    }
    if($numer[$i] > 0){
        $positivos++;
    }

}
echo '<br>'.$pares.'pares<br>';
echo $impares.'impares<br>';
echo $negativos.'negativos<br>';
echo $positivos.'positivos<br>';

function porc($n1,$n2)
{
    $por = $n1*($n2/100);
    echo "<br> porcentagem é ".$por;

   
}
porc(100,20);

echo "<br>".soma($numer)/count($numer);
?>