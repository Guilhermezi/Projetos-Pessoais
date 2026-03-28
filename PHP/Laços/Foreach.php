<!-- 
Ao trabalhar com arrays, você frequentemente precisa percorrer cada elemento um por um. Embora você possa usar um loop for com um contador de índice, o PHP fornece uma solução mais limpa: o loop foreach.

O loop foreach é projetado especificamente para iterar sobre arrays. Ele lida automaticamente com a contagem e fornece acesso direto a cada elemento.

<?php
$fruits = ["apple", "banana", "cherry"];

foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}
?>
Isso produz:

apple
banana
cherry
A sintaxe é direta: foreach ($array as $item). Em cada iteração, o próximo elemento do array é atribuído a $item, e você pode usá-lo dentro do corpo do loop.

Compare isso com alcançar o mesmo resultado com um loop for:

<?php
$fruits = ["apple", "banana", "cherry"];

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i] . "\n";
}
?>
A versão foreach é mais curta e mais fácil de ler. Você não precisa gerenciar uma variável de índice ou se preocupar com o comprimento do array — o PHP cuida de tudo isso por você.


Desafio

Fácil
Leia uma única linha de entrada contendo uma lista de números separados por vírgula (ex.: 10,25,5,30,15).

Use um loop foreach para iterar através do array e calcular a soma de todos os números. Imprima a soma total.

Exemplo 1:

Se a entrada for 10,25,5,30,15, a saída deve ser:

85
Exemplo 2:

Se a entrada for 1,2,3,4,5, a saída deve ser:

15
Exemplo 3:

Se a entrada for 100,200,300, a saída deve ser:

600 
-->
<?php
// Lê a entrada
$input = trim(fgets(STDIN));
// Transforma a string em um array de números
$numbers = explode(',', $input);

$sum = 0;

// Percorre o array $numbers, tratando cada elemento como $number
foreach ($numbers as $number) {
    $sum += $number; // Adiciona o número atual ao total
}

// Exibe o resultado
echo $sum;
?>
