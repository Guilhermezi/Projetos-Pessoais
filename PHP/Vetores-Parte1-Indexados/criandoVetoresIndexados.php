/*Agora que você entende o que são arrays, vamos ver como criá-los. O PHP oferece duas maneiras de criar um array indexado.

A abordagem mais comum usa colchetes quadrados:*/
<?php
$colors = ["Red", "Green", "Blue"];
?>
<!-- Você também pode usar a função array(), que faz exatamente a mesma coisa: -->
<?php
$colors = array("Red", "Green", "Blue");
?>

/* Ambos os métodos criam arrays idênticos. A sintaxe de colchetes quadrados é mais curta e moderna, então você a verá usada com mais frequência no código PHP hoje em dia.

Arrays podem conter qualquer tipo de dados—strings, números, booleanos ou até uma mistura: */

<?php
$numbers = [10, 20, 30, 40];
$mixed = ["Hello", 42, true];
?>

/* Você também pode criar um array vazio e adicionar itens a ele mais tarde: */

<?php
$tasks = [];
?>

/* Lembre-se, o PHP atribui automaticamente números de índice começando de 0. Então em $colors, "Red" está no índice 0, "Green" no índice 1, e "Blue" no índice 2. */

/*
Desafio

Fácil
Leia três valores da entrada: uma string fruit1, uma string fruit2, e uma string fruit3.

Crie um array indexado chamado $fruits contendo essas três frutas na ordem em que foram recebidas.

Em seguida, leia dois inteiros da entrada: num1 e num2.

Crie um array indexado chamado $numbers contendo esses dois números na ordem em que foram recebidos.

Finalmente, crie um array vazio chamado $emptyList.

Imprima o seguinte em linhas separadas:

A palavra Fruits: seguida por um espaço e as três frutas separadas por vírgulas (sem espaços após as vírgulas)
A palavra Numbers: seguida por um espaço e os dois números separados por vírgulas (sem espaços após as vírgulas)
A palavra Empty: seguida por um espaço e yes se o array vazio não tiver elementos, ou no caso contrário (use um operador ternário com count() para verificar se o array está vazio)
Exemplo:

Se as entradas forem Apple, Banana, Cherry, 10, e 20, a saída deve ser:

Fruits: Apple,Banana,Cherry
Numbers: 10,20
Empty: yes
Se as entradas forem Mango, Orange, Grape, 5, e 15, a saída deve ser:

Fruits: Mango,Orange,Grape
Numbers: 5,15
Empty: yes
*/
<?php
// Read fruit inputs
$fruit1 = trim(fgets(STDIN));
$fruit2 = trim(fgets(STDIN));
$fruit3 = trim(fgets(STDIN));

// Read number inputs
$num1 = intval(fgets(STDIN));
$num2 = intval(fgets(STDIN));

// TODO: Write your code below
// 1. Create an indexed array called $fruits containing the three fruits
$fruits = [$fruit1, $fruit2, $fruit3];

// 2. Create an indexed array called $numbers containing the two numbers
$numbers = [$num1, $num2];

// 3. Create an empty array called $emptyList
$emptyList = [];

// 4. Print the results as specified
echo "Fruits: " . implode(",", $fruits) . "\n";
echo "Numbers: " . implode(",", $numbers) . "\n";
echo "Empty: " . (count($emptyList) == 0 ? "yes" : "no") . "\n";

?>