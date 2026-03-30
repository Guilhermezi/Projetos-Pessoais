<!-- Às vezes, você precisa sair de um loop antecipadamente, antes que ele termine naturalmente. A instrução break permite exatamente isso — ela para o loop imediatamente e continua com o código após ele.

Imagine procurando em um array por um valor específico. Uma vez que você o encontre, não há motivo para verificar os elementos restantes. Usar break economiza iterações desnecessárias.

<?php
$numbers = [3, 7, 2, 9, 5, 1];

foreach ($numbers as $num) {
    if ($num === 9) {
        echo "Found 9!\n";
        break;
    }
    echo "Checking $num\n";
}

echo "Search complete";
?>
Isso produz a saída:

Checking 3
Checking 7
Checking 2
Found 9!
Search complete
Observe que 5 e 1 nunca são verificados. No momento em que o loop encontra 9, break sai completamente do loop, e a execução pula para "Search complete".

A instrução break funciona com todos os tipos de loop — for, while e foreach. É particularmente útil quando você está procurando algo ou quando uma certa condição significa que o loop deve parar imediatamente.


Desafio

Fácil
Leia duas linhas de entrada:

Uma lista de números separados por vírgula (ex.: 4,8,15,16,23,42)
Um número alvo para buscar
Use um loop foreach para buscar no array o número alvo. Quando encontrá-lo, imprima Found [target] at index [index]! e use break para sair do loop imediatamente.

Se o loop terminar sem encontrar o alvo, imprima [target] not found.

Dica: Use a sintaxe chave-valor no seu loop foreach para rastrear o índice.

Exemplo 1:

Se as entradas forem 10,25,30,45,50 e 30, a saída deve ser:

Found 30 at index 2!
Exemplo 2:

Se as entradas forem 5,10,15,20,25 e 20, a saída deve ser:

Found 20 at index 3!
Exemplo 3:

Se as entradas forem 1,2,3,4,5 e 99, a saída deve ser:

99 not found -->
<?php
// Read input
$numbers = explode(',', trim(fgets(STDIN)));
$target = trim(fgets(STDIN));

$found = false;

foreach ($numbers as $index => $num) {
    if (trim($num) === $target) {
        echo "Found $target at index $index!\n";
        $found = true;
        break;
    }
}

if (!$found) {
    echo "$target not found\n";
}
?>
