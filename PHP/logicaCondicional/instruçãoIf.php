<!-- Agora que você sabe como criar expressões booleanas, é hora de usá-las para fazer seu código executar ações diferentes com base em condições. A instrução if permite que você execute código apenas quando uma condição é verdadeira.

A sintaxe básica envolve sua condição em parênteses, seguida por chaves contendo o código a ser executado: -->
<?php
$age = 20;

if ($age >= 18) {
    echo "You are an adult";
}
?>
<!-- Quando o PHP encontra uma instrução if, ele avalia a condição. Se o resultado for true, o código dentro das chaves é executado. Se for false, o PHP pula esse bloco completamente e continua com o resto do programa. -->
<?php
$temperature = 35;

if ($temperature > 30) {
    echo "It's hot outside!";
}

echo " Have a nice day!";
?>

<!-- este exemplo, ambas as mensagens aparecem porque a condição é verdadeira. Se $temperature fosse 25, apenas "Have a nice day!" seria impresso, pois o bloco if seria pulado.

Você pode usar qualquer expressão booleana como sua condição, incluindo os operadores de comparação e lógicos que você já aprendeu. -->

<!-- 
Desafio

Fácil
Leia dois inteiros da entrada: um speed e um speedLimit.

Use uma instrução if para verificar se o motorista está excedendo a velocidade. Se speed for maior que speedLimit, imprima Speeding ticket issued.

Após a instrução if (independentemente de a condição ser verdadeira ou falsa), sempre imprima Drive safely! em uma nova linha.

Exemplo:

Se as entradas forem 75 e 60, a saída deve ser:

Speeding ticket issued
Drive safely!
Se as entradas forem 55 e 60, a saída deve ser:

Drive safely! -->

<?php
// Read input
$speed = intval(fgets(STDIN));
$speedLimit = intval(fgets(STDIN));

// TODO: Write your code below
// Check if speed is greater than speedLimit and print appropriate messages
    if ($speed > $speedLimit) {
        echo "Speeding ticket issued";
    }

    echo "\nDrive safely!";
?>