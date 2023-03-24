<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão verificar se a idade é maior ou igual à 90 anos, se for, mostrar a mensagem "já passou do tempo, não pode mais dirigir", senão mostrar "menor de idade"  */
 
$idade = 15;
if($idade >= 90){
    echo "Já passou do tempo, não pode mais dirigir";
}else if($idade >= 18){
    echo "Pode dirigir";
}else{
    echo "Menor de idade<br>"; 
}



/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão não mostrar a mensagem "menor de idade"  */
 
$idade = 15;
if($idade >= 18){
    echo "Pode dirigir";
}else{
    echo "Menor de idade<br>";
}
/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão verificar se a idade é maior ou igual à 90 anos, se for, mostrar a mensagem "já passou do tempo, não pode mais dirigir", senão mostrar "menor de idade"  */
 
$idade = 15;
if($idade >= 90){
    echo "Já passou do tempo, não pode mais dirigir";
}else if($idade >= 18){
    echo "Pode dirigir";
}else{
    echo "Menor de idade<br>";
}

/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se for mostrar a mensagem "pode dirigir" senão mostrar "menor de idade" e a quantidade de anos que falta para a pessoa ser maior de idade */
$idade = 10;
if($idade >= 18){
    echo "Pode dirigir";
}else{
    $diferenca = 18 - $idade;
    echo "Menor de idade, volte em $diferenca anos<br>";
}
/*
PROBLEMA: crie um código que verifique a cor informada pelo usuário e gere um código hexadecimal para formatar a cor do texto. As cores permitidas são: azul, vermelho e verde. Caso seja diferente, deixar a letra preta;
*/
 
$corEscolhida = "verde";
$corHexa = "";
 
switch($corEscolhida){
    case "vermelho":
        $corHexa = "#ff0000";
        break;
    case "azul":
        $corHexa = "#0000ff";
        break;
    case "verde":
        $corHexa = "#00ff00";
        break;
    default:
        $corHexa = "#000000";
        break;
}

 
echo "<h1 style='color:$corHexa'>Olá</h1><br>";


    // if($corEscolhida == "vermelho"){​​
//     $corHexa = "#ff0000";
// }​​elseif($corEscolhida == "azul"){​​
//     $corHexa = "#0000ff";
// }​​elseif($corEscolhida == "verde"){​​
//     $corHexa = "#00ff00";
// }​​else{​​
//     $corHexa = "#000000<br>";
// }​​

/*
PROBLEMA: exiba os números de 0 à 20
*/
$contador = 0;
while($contador <= 20){
    echo $contador . "<br>";
    // $contador = $contador + 1;
    $contador++;
}
/*
PROBLEMA: exiba os números de 10 à 0
*/
$contador = 10;
while ($contador >= 0) {
    echo "$contador <br>";
    $contador--;
}
?>
</body>
</html>