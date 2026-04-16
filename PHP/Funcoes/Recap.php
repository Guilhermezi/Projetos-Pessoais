<!-- 
Desafio

Fácil
Leia três linhas de entrada:

Um nome de item (ex., Coffee)
Um preço base como um número decimal (ex., 4.50)
Uma quantidade como um número inteiro (ex., 3)
Crie uma função chamada calculateTotal que combine tudo o que você aprendeu sobre funções:

Parâmetros: $item (string), $price (float), $quantity (int com valor padrão de 1)
Tipo de retorno: string
Dentro da função:

Crie uma variável local $subtotal para armazenar o resultado de $price * $quantity
Retorne uma string no formato: [quantity]x [item] = $[subtotal]
Chame a função com os valores de entrada e imprima o resultado retornado.

Exemplo 1:

Se as entradas forem Coffee, 4.50 e 3, a saída deve ser:

3x Coffee = $13.5
Exemplo 2:

Se as entradas forem Sandwich, 8.99 e 2, a saída deve ser:

2x Sandwich = $17.98
Exemplo 3:

Se as entradas forem Muffin, 3.25 e 5, a saída deve ser:

5x Muffin = $16.25
 
-->

<?php
// Read input
$item = trim(fgets(STDIN));
$price = floatval(fgets(STDIN));
$quantity = intval(fgets(STDIN));

// TODO: Create the calculateTotal function below
// - Parameters: $item (string), $price (float), $quantity (int with default value of 1)
// - Return type: string
// - Inside: create $subtotal variable and return formatted string
function calculateTotal(string $item, float $price, int $quantity = 1): string {
    $subtotal = $price * $quantity;
    return "{$quantity}x {$item} = \${$subtotal}";
}


// Call the function and print the result
echo calculateTotal($item, $price, $quantity);
?>