<!-- Você aprendeu como modificar elementos existentes, mas e adicionar novos elementos a um array? O PHP torna isso simples com a sintaxe de colchetes vazios.

Para adicionar um elemento ao final de um array, use colchetes quadrados vazios no lado esquerdo de uma atribuição: -->
<?php
$fruits = ["Apple", "Banana"];

$fruits[] = "Cherry";
$fruits[] = "Date";

echo count($fruits); // 4
?>

<!-- Cada vez que você usa $array[] = value, o PHP atribui automaticamente o próximo índice disponível. No exemplo acima, "Cherry" recebe o índice 2 e "Date" recebe o índice 3.

Isso é particularmente útil quando você começa com um array vazio e o constrói ao longo do tempo: -->

<?php
$shoppingList = [];

$shoppingList[] = "Milk";
$shoppingList[] = "Bread";
$shoppingList[] = "Eggs";

echo $shoppingList[0]; // Milk
echo $shoppingList[2]; // Eggs
?>

<!-- A sintaxe de colchetes vazios sempre anexa ao final do array, então você não precisa calcular ou rastrear o próximo índice você mesmo. O PHP lida com isso automaticamente. -->

<!-- Desafio

Fácil
Leia uma linha de entrada contendo valores separados por vírgula representando itens iniciais em uma lista (por exemplo, Apple,Banana).

Em seguida, leia mais três entradas:

Uma string item1 para adicionar ao array
Uma string item2 para adicionar ao array
Uma string item3 para adicionar ao array
Crie um array a partir da entrada separada por vírgulas, em seguida, adicione os três novos itens ao final do array usando a sintaxe de colchetes vazios.

Imprima o seguinte em linhas separadas:

A contagem total de itens no array após adicionar todos os três
O elemento no índice 2
O último elemento do array (use count() para encontrar o último índice)
Exemplo:

Se as entradas forem Apple,Banana, Cherry, Date e Elderberry, a saída deve ser:

5
Cherry
Elderberry
Se as entradas forem Red,Blue,Green, Yellow, Purple e Orange, a saída deve ser:

6
Green
Orange -->
<?php
// Read the comma-separated initial items
$input = trim(fgets(STDIN));
$items = explode(',', $input);

// Read the three items to add
$item1 = trim(fgets(STDIN));
$item2 = trim(fgets(STDIN));
$item3 = trim(fgets(STDIN));

// TODO: Write your code below
// Add the three items to the array using empty bracket syntax
// Then print:
// 1. The total count of items
// 2. The element at index 2
// 3. The last element (use count() to find the last index)

$items[] = $item1;
$items[] = $item2;
$items[] = $item3;

echo count($items) . "\n";
echo $items[2] . "\n";
echo $items[count($items) - 1] . "\n";

?>