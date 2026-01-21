<!-- O PHP fornece duas maneiras de verificar se os valores são iguais: o operador de igualdade (==) e o operador de identidade (===). Entender a diferença é crucial para escrever código confiável.

O operador de igualdade (==) compara valores após convertê-los para o mesmo tipo. Isso é chamado de "comparação solta": -->
<?php
var_dump(5 == "5");    // bool(true) - string converted to number
var_dump(0 == false);  // bool(true) - both become 0
var_dump(1 == true);   // bool(true) - both become 1
?>

<!-- O operador de identidade (===) compara tanto o valor quanto o tipo. Nenhuma conversão ocorre, então ambos devem corresponder exatamente: -->
<?php
var_dump(5 === "5");   // bool(false) - int vs string
var_dump(5 === 5);     // bool(true) - same type and value
var_dump(0 === false); // bool(false) - int vs bool
?>

<!-- Para comparações de "não igual", use != (solta) ou !== (estrita): -->
 <?php
var_dump(5 != "5");    // bool(false) - values are equal
var_dump(5 !== "5");   // bool(true) - types differ
?>

<!-- Como uma melhor prática, prefira === e !== para evitar surpresas inesperadas de conversão de tipo. -->

<!-- Desafio
Leia dois valores da entrada: um número (como string) e um inteiro.

Use os operadores de igualdade e identidade para avaliar as seguintes comparações e imprima o resultado de cada uma usando var_dump(), cada uma em uma nova linha:

Verifique se o valor da string é igual ao inteiro usando comparação frouxa (==)
Verifique se o valor da string é igual ao inteiro usando comparação estrita (===)
Verifique se o valor da string não é igual ao inteiro usando comparação frouxa (!=)
Verifique se o valor da string não é igual ao inteiro usando comparação estrita (!==)
Nota: Mantenha o primeiro valor como string (não o converta). Converta o segundo valor para inteiro.

Exemplo:

Se as entradas forem 42 e 42, a saída deve ser:

bool(true)
bool(false)
bool(false)
bool(true)
Explicação:

"42" == 42 é verdadeiro (os valores são iguais após a conversão de tipo)
"42" === 42 é falso (string vs int - tipos diferentes)
"42" != 42 é falso (os valores são iguais)
"42" !== 42 é verdadeiro (os tipos são diferentes) -->

<?php
// Read input
$stringValue = trim(fgets(STDIN));
$intValue = intval(trim(fgets(STDIN)));

// TODO: Write your code below
// Use var_dump() to print the result of each comparison on a new line:
// 1. Loose equality (==)
var_dump($stringValue == $intValue);
// 2. Strict equality (===)
var_dump($stringValue === $intValue);
// 3. Loose inequality (!=)
var_dump($stringValue != $intValue);
// 4. Strict inequality (!==)
var_dump($stringValue !== $intValue);

?>