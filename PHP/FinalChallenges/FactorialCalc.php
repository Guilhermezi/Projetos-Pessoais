/*
Desafio

Fácil
Leia uma linha de entrada:

Um inteiro não negativo (por exemplo, 5)
Crie uma função chamada factorial que aceita um parâmetro:

$n como int
A função deve ter uma declaração de tipo de retorno de int e calcular o fatorial do número dado usando um loop for.

O fatorial de um número n (escrito como n!) é o produto de todos os inteiros positivos de 1 a n. 

Lembre-se:

Comece com um resultado de 1
Multiplique o resultado por cada número de 1 a $n
O fatorial de 0 é 1
Chame a função com o valor de entrada e imprima o resultado retornado.

Por exemplo:

5! = 5 × 4 × 3 × 2 × 1 = 120
3! = 3 × 2 × 1 = 6
1! = 1
0! = 1 (by definition)
*/
<?php
// Lê a entrada
$n = intval(fgets(STDIN));

// Função que calcula o fatorial usando um loop for
function factorial(int $n): int {
    $result = 1;

    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }

    return $result;
}

// Chama a função e imprime o resultado
echo factorial($n);
?>
