Acessando Elementos por Índice

Agora que você pode criar arrays, você precisa saber como recuperar itens individuais deles. Você acessa elementos usando seu índice—o número da posição dentro de colchetes.

<?php
$fruits = ["Apple", "Banana", "Cherry"];

echo $fruits[0]; // Apple
echo $fruits[1]; // Banana
echo $fruits[2]; // Cherry
?>

Lembre-se de que a indexação começa em 0, não em 1. Então o primeiro elemento está sempre no índice 0, o segundo no índice 1, e assim por diante. Isso é uma fonte comum de confusão para iniciantes, mas se torna natural com a prática.

Você também pode armazenar um elemento acessado em uma variável:
<?php
$colors = ["Red", "Green", "Blue"];

$firstColor = $colors[0];
$lastColor = $colors[2];

echo $firstColor; // Red
echo $lastColor;  // Blue
?>

Acessar o último elemento requer conhecer o comprimento do array. Para um array com 3 itens, o último índice é 2 (já que começamos a contar de 0). Você aprenderá uma maneira mais flexível de encontrar o último elemento em uma aula futura.


Desafio

Fácil
Leia uma linha de entrada contendo valores separados por vírgulas representando itens em uma lista de compras (por exemplo, Milk,Bread,Eggs,Butter,Cheese).

Crie um array a partir desta entrada, em seguida:

Imprima o primeiro item da lista
Imprima o terceiro item da lista
Armazene o segundo item em uma variável chamada $secondItem e imprima-a
Imprima o item no índice 4
Imprima cada resultado em uma linha separada.

Exemplo:

Se a entrada for Milk,Bread,Eggs,Butter,Cheese, a saída deve ser:

Milk
Eggs
Bread
Cheese
Se a entrada for Apple,Orange,Grape,Mango,Kiwi, a saída deve ser:

Apple
Grape
Orange
Kiwi

<?php
// Read the comma-separated shopping list
$input = trim(fgets(STDIN));

// Create an array from the input
$shoppingList = explode(',', $input);

// TODO: Write your code below
// 1. Print the first item in the list
echo $shoppingList[0] . "\n";
// 2. Print the third item in the list
echo $shoppingList[2] . "\n";
// 3. Store the second item in a variable called $secondItem and print it
$secondItem = $shoppingList[1];
echo $secondItem . "\n";
// 4. Print the item at index 4
echo $shoppingList[4] . "\n";

?>