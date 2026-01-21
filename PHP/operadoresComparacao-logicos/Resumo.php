<!-- Desafio
Leia cinco valores da entrada: um inteiro age, um inteiro balance, uma string isStudent (seja "true" ou "false"), uma string hasPromoCode (seja "true" ou "false"), e um inteiro itemPrice.

Converta os valores de string para booleanos comparando-os com "true".

Avalie as seguintes três condições e imprima o resultado de cada uma usando var_dump(), cada uma em uma nova linha:

Verifique se a pessoa qualifica para um desconto juvenil: age é menor que 25 E é estudante
Verifique se a pessoa pode pagar pelo item com desconto: balance é maior ou igual a itemPrice OU (balance é pelo menos metade de itemPrice E hasPromoCode é true)
Verifique se a pessoa recebe checkout prioritário: (age é pelo menos 65 OU isStudent é true) E balance é maior que 0 E NÃO hasPromoCode
Exemplo:

Se as entradas forem 22, 50, true, false, e 80, a saída deve ser:

bool(true)
bool(false)
bool(true)
Explicação:

age < 25 && isStudent → 22 < 25 && true → true
balance >= itemPrice || (balance >= itemPrice / 2 && hasPromoCode) → 50 >= 80 || (50 >= 40 && false) → false || false → false
(age >= 65 || isStudent) && balance > 0 && !hasPromoCode → (false || true) && true && true → true

 -->

 <?php
// Read input values
$age = intval(fgets(STDIN));
$balance = intval(fgets(STDIN));
$isStudentStr = trim(fgets(STDIN));
$hasPromoCodeStr = trim(fgets(STDIN));
$itemPrice = intval(fgets(STDIN));

// Convert string values to booleans
$isStudent = $isStudentStr === "true";
$hasPromoCode = $hasPromoCodeStr === "true";

// TODO: Write your code below
// 1. Check if the person qualifies for a youth discount
$youthDiscount = $age < 25 && $isStudent;
var_dump($youthDiscount);

// 2. Check if the person can afford the item with a discount
$canAfford = $balance >= $itemPrice || ($balance >= $itemPrice / 2 && $hasPromoCode);
var_dump($canAfford);

// 3. Check if the person gets priority checkout
$priorityCheckout = ($age >= 65 || $isStudent) && $balance > 0 && !$hasPromoCode;
var_dump($priorityCheckout);

?>