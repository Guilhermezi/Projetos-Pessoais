<?php
/**Desafio

Fácil
Leia quatro valores da entrada: um inteiro age, uma string membershipType, uma string promoCode e um inteiro cartTotal.

Determine as saídas apropriadas usando as ferramentas de tomada de decisão que você aprendeu:

Categoria de Idade (use if-elseif-else):
Se age for menor que 13, imprima Child
Caso contrário, se age for menor que 20, imprima Teen
Caso contrário, se age for menor que 65, imprima Adult
Caso contrário, imprima Senior
Desconto de Membro (use switch): Em uma nova linha, imprima o desconto baseado no tipo de membro:
gold → 20% off
silver → 10% off
bronze → 5% off
Qualquer outro valor → No discount
Status de Promoção (use null coalescing): Crie uma variável $appliedPromo definida como null. Use o operador de coalescência nula para atribuir a $displayPromo o valor de $appliedPromo se não for nula, caso contrário use a entrada promoCode. Imprima $displayPromo em uma nova linha.
Envio (use ternary): Em uma nova linha, use o operador ternário para imprimir Free shipping se cartTotal for 50 ou mais, caso contrário imprima Standard shipping.
Exemplo:

Se as entradas forem 25, gold, SAVE10 e 75, a saída deve ser:

Adult
20% off
SAVE10
Free shipping
Se as entradas forem 10, basic, WELCOME e 30, a saída deve ser:

Child
No discount
WELCOME
Standard shipping**/

// Read input
$age = intval(fgets(STDIN));
$membershipType = trim(fgets(STDIN));
$promoCode = trim(fgets(STDIN));
$cartTotal = intval(fgets(STDIN));

// TODO: Write your code below

// 1. Age Category (use if-elseif-else)
if ($age < 13) {
    echo "Child\n";
} elseif ($age < 20) {
    echo "Teen\n";
} elseif ($age < 65) {
    echo "Adult\n";
} else {
    echo "Senior\n";
}

// 2. Membership Discount (use switch)
switch ($membershipType) {
    case "gold":
        echo "20% off\n";
        break;
    case "silver":
        echo "10% off\n";
        break;
    case "bronze":
        echo "5% off\n";
        break;
    default:
        echo "No discount\n";
}

// 3. Promo Status (use null coalescing)
$appliedPromo = null;
$displayPromo = $appliedPromo ?? $promoCode;
echo $displayPromo . "\n";

// 4. Shipping (use ternary)
echo $cartTotal >= 50 ? "Free shipping" : "Standard shipping";
?>