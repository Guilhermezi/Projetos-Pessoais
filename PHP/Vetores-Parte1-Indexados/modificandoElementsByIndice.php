<?php 
//Você aprendeu como acessar elementos de array pelo índice. Agora vamos ver como alterar esses elementos. Modificar um elemento de array usa a mesma sintaxe de colchetes, mas com uma atribuição
$fruits = ["Apple", "Banana", "Cherry"];

$fruits[1] = "Blueberry";

echo $fruits[1]; // Blueberry
//Aqui, substituímos "Banana" no índice 1 por "Blueberry". O valor original se foi—arrays não mantêm um histórico de alterações.

//Você pode modificar qualquer elemento desde que saiba seu índice:
?>


<?php
$scores = [85, 90, 78];

$scores[0] = 95;  // Update first score
$scores[2] = 82;  // Update last score

echo $scores[0]; // 95
echo $scores[2]; // 82
//Isso é útil quando você precisa atualizar dados em sua lista—como corrigir um erro de digitação, atualizar um preço ou alterar o status de um usuário. O índice diz ao PHP exatamente qual elemento substituir, deixando todos os outros elementos intocados.

?>
<?php
/*Desafio

Fácil
Leia uma linha de entrada contendo valores separados por vírgulas representando uma lista de cores (por exemplo, Red,Green,Blue,Yellow).

Então leia mais três entradas:

Um inteiro index1 representando o primeiro índice a ser modificado
Uma string newValue1 representando o novo valor para esse índice
Um inteiro index2 representando o segundo índice a ser modificado
Crie um array a partir da entrada separada por vírgulas, então:

Modifique o elemento em index1 para ser newValue1
Modifique o elemento em index2 para ser Purple
Imprima os elementos do array modificado em linhas separadas, em ordem do índice 0 até o último índice.

Exemplo:

Se as entradas forem Red,Green,Blue,Yellow, 0, Orange e 2, a saída deve ser:

Orange
Green
Purple
Yellow
Se as entradas forem Apple,Banana,Cherry,Mango,Kiwi, 1, Grape e 4, a saída deve ser:

Apple
Grape
Cherry
Mango
Purple*/
?>

<?php
// Read the comma-separated colors
$colorsInput = trim(fgets(STDIN));
$colors = explode(',', $colorsInput);

// Read the modification inputs
$index1 = intval(trim(fgets(STDIN)));
$newValue1 = trim(fgets(STDIN));
$index2 = intval(trim(fgets(STDIN)));

// TODO: Write your code here
// 1. Modify the element at index1 to be newValue1
$colors[$index1] = $newValue1;
// 2. Modify the element at index2 to be "Purple"
$colors[$index2] = "Purple";
// Output each element on a separate line
foreach ($colors as $color) {
    echo $color . "\n";
}
?>


"The best programmers don’t avoid errors—they outgrow them."