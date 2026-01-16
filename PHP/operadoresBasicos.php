<!-- Operadores Aritméticos -->

<!-- Agora que você sabe como trabalhar com variáveis e tipos de dados, vamos realizar cálculos com eles. O PHP fornece quatro operadores aritméticos básicos que funcionam exatamente como na matemática: -->

    Operador	Operação	Exemplo
    +	Adição	5 + 3 → 8
    -	Subtração	10 - 4 → 6
    *	Multiplicação	6 * 7 → 42
    /	Divisão	20 / 4 → 5

<!-- Você pode usar esses operadores com números diretamente ou com variáveis: -->
 <?php
$price = 25;
$quantity = 4;
$total = $price * $quantity;
echo $total; // Exibe: 100
?>

<!-- Você também pode combinar múltiplas operações em uma única expressão: -->
 <?php
$result = 10 + 5 - 3;
echo $result; // Exibe: 12
?>

<?php
// Read input
$price = intval(fgets(STDIN));
$quantity = intval(fgets(STDIN));
$discount = intval(fgets(STDIN));

// TODO: Write your code below to calculate the total cost
$total = $price * $quantity - $discount;

// Output the result
echo $total;
?>

<!-- Operador de Módulo -->

<!-- O operador módulo (%) retorna o resto após a divisão. Quando você divide um número por outro, o módulo dá o que sobra. -->
 <?php
echo 10 % 3; // Saída: 1
?>

<!-- Aqui, 10 dividido por 3 é igual a 3 com um resto de 1. O operador módulo retorna esse resto.

Um uso comum do módulo é verificar se um número é par ou ímpar. Se um número dividido por 2 não tiver resto, é par: -->

    <?php
$number = 8;
echo $number % 2; // Saída: 0 (par)

$number = 7;
echo $number % 2; // Saída: 1 (ímpar)
?>

<!-- Mais exemplos para ajudá-lo a entender o padrão: -->
 <?php
echo 15 % 4; // Saída: 3 (15 = 4*3 + 3)
echo 20 % 5; // Saída: 0 (20 = 5*4 + 0)
?>

<!-- Operador de Exponenciação -->
<!-- O operador de exponenciação (**) eleva um número a uma potência. É uma forma mais limpa de escrever "multiplicar um número por si mesmo" um certo número de vezes. -->
<?php
echo 2 ** 3; // Outputs: 8
?>

<!-- Aqui, 2 ** 3 significa 2 elevado à potência de 3, que é 2 × 2 × 2 = 8. O primeiro número é a base, e o segundo é o expoente. -->

<?php
$base = 5;
$exponent = 2;
$result = $base ** $exponent;
echo $result; // Outputs: 25
?>

<!-- Você também pode usar este operador com expoentes decimais. Por exemplo, elevar um número à potência de 0.5 dá a sua raiz quadrada: -->

<?php
echo 16 ** 0.5; // Outputs: 4
echo 9 ** 0.5;  // Outputs: 3
?>

<?php
// Read input
$base = intval(fgets(STDIN));
$exponent = intval(fgets(STDIN));

// TODO: Write your code below to calculate base raised to the power of exponent
$result = $base ** $exponent;

// Output the result
echo $result;
?>

<!-- Atribuição Composta -->
 <!-- Quando você precisa atualizar uma variável com base em seu valor atual, o PHP oferece uma abreviação chamada operadores de atribuição combinados. Em vez de escrever o nome da variável duas vezes, você pode combinar a operação com a atribuição.

Por exemplo, para adicionar 10 a uma variável: -->
<?php
$score = 50;
$score = $score + 10; // The long way
$score += 10;         // The shorthand way
?>

<!-- Ambas as linhas fazem a mesma coisa, mas += é mais curto e limpo. Esse padrão funciona com todos os operadores aritméticos: -->
 Operador	Exemplo	Equivalente A
+=	$x += 5	$x = $x + 5
-=	$x -= 3	$x = $x - 3
*=	$x *= 2	$x = $x * 2
/=	$x /= 4	$x = $x / 4
%=	$x %= 3	$x = $x % 3
**=	$x **= 2	$x = $x ** 2

<?php
$balance = 100;
$balance -= 25;  // $balance is now 75
$balance *= 2;   // $balance is now 150
echo $balance;   // Outputs: 150
?>

<?php
// Read input
$startingValue = intval(fgets(STDIN));
$adjustmentAmount = intval(fgets(STDIN));

// Store the starting value in $total
$total = $startingValue;

// TODO: Write your code below
// Use combined assignment operators to:
// 1. Add the adjustment amount to $total
// 2. Multiply $total by 3
// 3. Subtract 10 from $total
$total += $adjustmentAmount;
$total *= 3;
$total -= 10;


// Output the result
echo $total;
?>

<!-- Incremento/Decremento -->

<!-- Quando você precisa adicionar ou subtrair exatamente 1 de uma variável, o PHP fornece uma maneira ainda mais curta do que a atribuição combinada: os operadores de incremento e decremento.

O operador de incremento (++) adiciona 1 a uma variável, enquanto o operador de decremento (--) subtrai 1: -->
<?php
$count = 5;
$count++;  // $count is now 6
$count--;  // $count is now 5 again
?>

<!-- Esses operadores podem ser colocados antes ou depois da variável, o que afeta quando a mudança ocorre: -->
 <?php
$a = 5;
echo $a++;  // Outputs: 5, then $a becomes 6
echo $a;    // Outputs: 6

$b = 5;
echo ++$b;  // $b becomes 6, then outputs: 6
?>

<!-- Com $a++ (pós-incremento), o valor original é usado primeiro, depois incrementado. Com ++$b (pré-incremento), o valor é incrementado primeiro, depois usado. A mesma lógica se aplica a -- para decrementar. -->

<?php
// Read input
$counter = intval(fgets(STDIN));

// TODO: Write your code below
// 1. Print the value of $counter++ (post-increment)
echo $counter++ . "\n";

// 2. Print the current value of $counter
echo $counter . "\n";
…?>