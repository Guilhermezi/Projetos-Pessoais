<!-- 



Assim como você pode declarar tipos para parâmetros, você também pode especificar o tipo que uma função deve retornar. As declarações de tipo de retorno dizem ao PHP exatamente que tipo de valor sua função enviará de volta, ajudando a capturar erros quando uma função acidentalmente retorna o tipo errado.

Para adicionar um tipo de retorno, coloque dois pontos seguido do tipo após o parêntese de fechamento da lista de parâmetros:

<?php
function add(int $a, int $b): int {
    return $a + $b;
}

echo add(5, 3);
?>
Isso produz 8. O : int após os parênteses declara que esta função deve retornar um inteiro. Se você tentasse retornar uma string em vez disso, o PHP produziria um erro.

Você pode usar os mesmos tipos que nas declarações de parâmetros: int, float, string, bool e array. Há também um tipo especial chamado void para funções que não retornam nada:

<?php
function sayHello(string $name): void {
    echo "Hello, $name!\n";
}

sayHello("Alice");
?>
Uma função void não pode ter uma instrução return com um valor. Combinar tipos de parâmetros com tipos de retorno torna suas funções auto-documentadas—qualquer pessoa lendo o código sabe imediatamente o que entra e o que sai.


Desafio

Fácil
Leia duas linhas de entrada:

Um preço como um número decimal (ex.: 49.99)
Uma porcentagem de desconto como um número inteiro (ex.: 20)
Crie uma função chamada calculateFinalPrice que aceita dois parâmetros com declarações de tipo:

$price como float
$discountPercent como int
A função deve ter uma declaração de tipo de retorno de float e deve retornar o preço final após aplicar o desconto.

Chame a função com os valores de entrada e imprima o resultado retornado.

Exemplo 1:

Se as entradas forem 100.00 e 25, a saída deve ser:

75
Exemplo 2:

Se as entradas forem 49.99 e 10, a saída deve ser:

44.991
Exemplo 3:

Se as entradas forem 200.50 e 50, a saída deve ser:

100.25
 
-->
<?php
// Read input
$price = floatval(fgets(STDIN));
$discountPercent = intval(fgets(STDIN));

// Função com declaração de tipos nos parâmetros e no retorno
function calculateFinalPrice(float $price, int $discountPercent): float {
    $discountAmount = $price * ($discountPercent / 100);
    return $price - $discountAmount;
}

// Call the function and print the result
echo calculateFinalPrice($price, $discountPercent);
?>
