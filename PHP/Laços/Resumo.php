<!-- 
Leia três linhas de entrada:

Uma lista separada por vírgulas de inteiros (ex.: 12,5,8,20,3,15,7)
Um valor de limite mínimo
Um valor de limite máximo
Processe o array para encontrar a soma de todos os números que estão dentro do intervalo (inclusivo tanto o mínimo quanto o máximo). Use continue para pular números fora do intervalo. Além disso, se você encontrar um número que é exatamente o dobro do limite máximo, pare o processamento imediatamente usando break.

Imprima duas linhas:

A soma dos números válidos dentro do intervalo
A contagem dos números que foram adicionados à soma
Exemplo 1:

Se as entradas forem 5,12,8,20,15,3,10, 5 e 15, a saída deve ser:

50
5
(5 + 12 + 8 + 15 + 10 = 50, cinco números estão dentro do intervalo 5-15)

Exemplo 2:

Se as entradas forem 2,8,12,20,6,14, 5 e 10, a saída deve ser:

8
1
(O processamento para em 20 porque é o dobro do máximo de 10; apenas 8 foi adicionado antes desse ponto, então a soma é 8 e a contagem é 1)

Exemplo 3:

Se as entradas forem 1,2,3,4,5, 10 e 20, a saída deve ser:

0
0
(Nenhum número está dentro do intervalo 10-20) 
-->
<?php
// Read input
$numbers = explode(',', trim(fgets(STDIN)));
$min = intval(trim(fgets(STDIN)));
$max = intval(trim(fgets(STDIN)));

// Initialize variables
$sum = 0;
$count = 0;

// Itera pelo array de números
foreach ($numbers as $num) {
    $num = intval($num); // Garante que o valor seja tratado como inteiro

    // Condição de parada: se o número for exatamente o dobro do máximo
    if ($num === ($max * 2)) {
        break;
    }

    // Pula números que estão fora do intervalo (menores que min OU maiores que max)
    if ($num < $min || $num > $max) {
        continue;
    }

    // Se chegou aqui, o número é válido
    $sum += $num;
    $count++;
}

// Output the results
echo $sum . "\n";
echo $count;
?>
