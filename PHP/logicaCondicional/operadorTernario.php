<!-- Quando você tem um if-else simples que apenas atribui um valor com base em uma condição, o PHP oferece uma maneira mais curta de escrevê-lo: o operador ternário.

A sintaxe usa ? e : para criar um condicional compacto em uma linha: -->
<?php
$age = 20;

// Using if-else
if ($age >= 18) {
    $status = "adult";
} else {
    $status = "minor";
}

// Same thing with ternary operator
$status = $age >= 18 ? "adult" : "minor";

echo $status; // adult
?>
<!-- A estrutura é: condition ? value_if_true : value_if_false. O PHP avalia a condição primeiro. Se for verdadeira, a expressão retorna o valor após ?. Se falsa, retorna o valor após :. -->
<?php
$score = 45;
$result = $score >= 50 ? "Pass" : "Fail";
echo $result; // Fail

$isLoggedIn = true;
$greeting = $isLoggedIn ? "Welcome back!" : "Please log in";
echo $greeting; // Welcome back!
?>
<!--  operador ternário é perfeito para atribuições simples de escolha binária. Para lógica mais complexa com múltiplas condições, prefira as instruções if-elseif-else para melhor legibilidade. -->

<!-- 
Desafio

Fácil
Leia dois inteiros da entrada: um score e um passingScore.

Use o operador ternário para determinar o resultado com base no seguinte:

Se score for maior ou igual a passingScore, o resultado deve ser Passed
Caso contrário, o resultado deve ser Failed
Imprima o resultado na primeira linha.

Em seguida, leia um inteiro quantity da entrada. Use o operador ternário para determinar a mensagem de envio:

Se quantity for maior que 10, a mensagem deve ser Free shipping
Caso contrário, a mensagem deve ser Standard shipping
Imprima a mensagem de envio na segunda linha.

Exemplo:

Se as entradas forem 75, 60 e 15, a saída deve ser:

Passed
Free shipping
Se as entradas forem 45, 50 e 5, a saída deve ser:

Failed
Standard shipping -->
<?php
// Read input
$score = intval(fgets(STDIN));
$passingScore = intval(fgets(STDIN));
$quantity = intval(fgets(STDIN));

// TODO: Write your code below
// Use the ternary operator to determine if the score is a pass or fail
$result = $score >= $passingScore ? "Passed" : "Failed";

// Use the ternary operator to determine the shipping message
$shippingMessage = $quantity > 10 ? "Free shipping" : "Standard shipping";

// Output the results
echo $result . "\n";
echo $shippingMessage;
?>