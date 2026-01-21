<!-- Operadores de comparação permitem comparar dois valores e obter um resultado booleano: true ou false. Esses operadores são essenciais para tomar decisões no seu código.

O PHP fornece vários operadores de comparação para verificar relações entre valores: -->
    
    <!-- 
Operador Significado Exemplo Resultado
    <	Menor que	5 < 10	true
    >	Maior que	5 > 10	false
    <=	Menor ou igual	5 <= 5	true
    >=	Maior ou igual	10 >= 5	true -->

<?php
$age = 18;
$isAdult = $age >= 18;    // true
$isMinor = $age < 18;     // false

$score = 75;
$passed = $score >= 60;   // true
?>

<!-- Para ver o resultado de uma comparação, você pode usar var_dump() que exibe tanto o tipo quanto o valor: -->
 <?php
var_dump(10 > 5);   // Outputs: bool(true)
var_dump(3 >= 7);   // Outputs: bool(false)
?>

<!-- Esses operadores funcionam com números e strings da mesma forma. Na próxima lição, você aprenderá sobre operadores de igualdade para verificar se os valores são iguais ou idênticos. -->

<!-- Desafio
Leia dois números da entrada: um score e um passingMark.

Use operadores de comparação para avaliar as seguintes condições e imprima o resultado de cada uma usando var_dump(), cada uma em uma nova linha:

Verifique se score é maior que passingMark
Verifique se score é menor que passingMark
Verifique se score é maior ou igual a passingMark
Verifique se score é menor ou igual a passingMark
Exemplo:

Se as entradas forem 75 e 60, a saída deve ser:

bool(true)
bool(false)
bool(true)
bool(false)
Explicação:

75 > 60 é verdadeiro
75 < 60 é falso
75 >= 60 é verdadeiro
75 <= 60 é falso -->

<?php
// Read input
$score = intval(fgets(STDIN));
$passingMark = intval(fgets(STDIN));

// TODO: Write your code below
// Use comparison operators and var_dump() to check:
// 1. If score is greater than passingMark
var_dump($score > $passingMark);
// 2. If score is less than passingMark
var_dump($score < $passingMark);
// 3. If score is greater than or equal to passingMark
var_dump($score >= $passingMark);
// 4. If score is less than or equal to passingMark
var_dump($score <= $passingMark)
?>