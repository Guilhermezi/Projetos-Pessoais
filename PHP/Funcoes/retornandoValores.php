<!-- 
As funções que criamos até agora usam echo para exibir a saída diretamente. Mas muitas vezes, você quer que uma função calcule algo e retorne o resultado para você, para que possa usá-lo em outro lugar no seu código. É aí que entra a instrução return.

A instrução return envia um valor de volta para onde a função foi chamada:

<?php
function add($a, $b) {
    return $a + $b;
}

$result = add(5, 3);
echo $result;
?>
Isso exibe 8. Em vez de imprimir a soma dentro da função, nós a retornamos. O código chamador recebe esse valor e o armazena em $result.

Retornar valores torna as funções muito mais versáteis. Você pode usar o valor retornado em cálculos, passá-lo para outras funções ou armazená-lo para uso posterior:

<?php
function double($num) {
    return $num * 2;
}

echo double(5) + double(3);
?>
Isso exibe 16 (10 + 6). Cada chamada para double() retorna um valor que é usado na adição.

Uma coisa importante a saber: quando o PHP encontra uma instrução return, a função para imediatamente. Qualquer código após return não será executado.


Desafio

Fácil
Leia duas linhas de entrada:

Um número representando a base de um retângulo (ex.: 5)
Um número representando a altura de um retângulo (ex.: 3)
Crie uma função chamada calculateArea que aceita dois parâmetros: $base e $height. A função deve retornar a área do retângulo (base × height).

Chame a função com os valores de entrada, armazene o valor retornado em uma variável e imprima o resultado.

Exemplo 1:

Se as entradas forem 5 e 3, a saída deve ser:

15
Exemplo 2:

Se as entradas forem 10 e 7, a saída deve ser:

70
Exemplo 3:

Se as entradas forem 12 e 4, a saída deve ser:

48
 
-->
<?php
// Read input
$base = intval(fgets(STDIN));
$height = intval(fgets(STDIN));

// TODO: Create a function called calculateArea that accepts $base and $height parameters
// The function should return the area (base × height)
function calculateArea($base, $height){
    return $base * $height;
}

// TODO: Call the function with the input values and store the result in a variable
$result = calculateArea($base, $height);


// Output the result
echo $result;
?>