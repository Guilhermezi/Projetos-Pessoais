<!-- Desafio

Fácil
Construa uma lista de compras do zero realizando uma série de operações.

Leia as seguintes entradas:

Uma string item1 - o primeiro item a adicionar
Uma string item2 - o segundo item a adicionar
Uma string item3 - o terceiro item a adicionar
Um inteiro updateIndex - o índice do item a atualizar
Uma string newItem - o valor de substituição para esse índice
Uma string extraItem - um item adicional a adicionar no final
Realize as seguintes operações em ordem:

Comece com um array vazio chamado $shoppingList
Adicione item1, item2 e item3 ao array (nessa ordem)
Imprima a contagem de itens no array
Imprima o primeiro item no array
Atualize o elemento em updateIndex com newItem
Adicione extraItem ao final do array
Imprima a nova contagem de itens
Imprima o último item no array (use count() para encontrar o último índice)
Imprima o item em updateIndex para confirmar a atualização
Imprima cada resultado em uma linha separada.

Exemplo:

Se as entradas forem Milk, Bread, Eggs, 1, Butter e Cheese, a saída deve ser:

3
Milk
4
Cheese
Butter
Se as entradas forem Apple, Banana, Orange, 0, Grape e Mango, a saída deve ser:

3
Apple
4
Mango
Grape -->
<?php
// Read inputs
$item1 = trim(fgets(STDIN));
$item2 = trim(fgets(STDIN));
$item3 = trim(fgets(STDIN));
$updateIndex = intval(trim(fgets(STDIN)));
$newItem = trim(fgets(STDIN));
$extraItem = trim(fgets(STDIN));

// TODO: Write your code below
// 1. Start with an empty array called $shoppingList
$shoppingList = [];
// 2. Add item1, item2, and item3 to the array
$shoppingList[] = $item1;
$shoppingList[] = $item2;
$shoppingList[] = $item3;
// 3. Print the count of items
echo count($shoppingList) . "\n";
// 4. Print the first item
echo $shoppingList[0] . "\n";
// 5. Update the element at updateIndex with newItem
$updateIndex = $newItem;
// 6. Add extraItem to the end
$shoppingList[] = $extraItem;
// 7. Print the new count
echo count($shoppingList) . "\n";
// 8. Print the last item (use count() to find the last index)
echo $shoppingList[count($shoppingList) - 1] . "\n";
// 9. Print the item at updateIndex
echo $updateIndex;

?>