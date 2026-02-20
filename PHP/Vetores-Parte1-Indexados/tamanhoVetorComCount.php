<!-- Quando trabalhar com arrays, você frequentemente precisa saber quantos elementos eles contêm. O PHP fornece a função count() exatamente para esse propósito. -->

 <?php
$fruits = ["Apple", "Banana", "Cherry"];

echo count($fruits); // 3
?>

<!-- A função retorna o número total de elementos no array. Isso é especialmente útil quando você precisa acessar o último elemento. Como a indexação começa em 0, o último índice é sempre count($array) - 1. -->

<?php
$colors = ["Red", "Green", "Blue", "Yellow"];

$lastIndex = count($colors) - 1;
echo $colors[$lastIndex]; // Yellow
?>

<!-- Essa abordagem funciona independentemente de quantos itens estejam no array. Seja você tenha 3 elementos ou 300, count() fornece o tamanho exato, tornando seu código flexível e confiável. -->

<!-- Desafio

Fácil
Leia uma linha de entrada contendo valores separados por vírgula representando uma lista de itens (ex.: Laptop,Mouse,Keyboard,Monitor,Webcam).

Crie um array a partir dessa entrada, em seguida:

Imprima o número total de itens no array
Imprima o elemento último do array (use count() para calcular o último índice)
Imprima o elemento penúltimo do array
Imprima cada resultado em uma linha separada.

Exemplo:

Se a entrada for Laptop,Mouse,Keyboard,Monitor,Webcam, a saída deve ser:

5
Webcam
Monitor
Se a entrada for Apple,Banana,Cherry, a saída deve ser:

3
Cherry
Banana -->
<?php
// Read the comma-separated input
$input = trim(fgets(STDIN));

// Convert the input string into an array
$items = explode(',', $input);

// TODO: Write your code below
// 1. Print the total number of items using count()
echo count($items) . "\n";

// 2. Print the last element (use count() to calculate the last index)
echo $items[count($items) - 1] . "\n";

// 3. Print the second-to-last element
echo $items[count($items) - 2] . "\n";

?>

<!-- "Mastery comes to those who persist, not to those who never fail." -->