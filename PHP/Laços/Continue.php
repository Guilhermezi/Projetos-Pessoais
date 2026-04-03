<!-- 
Enquanto break sai completamente de um loop, às vezes você só quer pular a iteração atual e prosseguir para a próxima. É exatamente isso que a declaração continue faz.

Quando o PHP encontra continue, ele imediatamente pula para a próxima iteração do loop, ignorando qualquer código restante na iteração atual.

<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i === 3) {
        continue;
    }
    echo $i . "\n";
}
?>
Isso produz a saída:

1
2
4
5
Observe que 3 está ausente. Quando $i é igual a 3, a declaração continue pula o echo e vai diretamente para a próxima iteração onde $i se torna 4.

Um caso de uso comum é filtrar valores indesejados enquanto processa um array:

<?php
$numbers = [10, -5, 8, -3, 12];

foreach ($numbers as $num) {
    if ($num < 0) {
        continue;
    }
    echo $num . "\n";
}
?>
Isso imprime apenas os números positivos: 10, 8 e 12. Os valores negativos são ignorados, mas o loop continua executando por todos os elementos.

A diferença principal: break para o loop completamente, enquanto continue apenas pula para a próxima iteração.


Desafio

Fácil
Leia duas linhas de entrada:

Uma lista separada por vírgulas de inteiros (ex.: 3,7,12,5,8,20,15)
Um número divisor
Use um loop foreach para iterar pelo array. Use continue para pular quaisquer números que sejam divisíveis pelo divisor dado. Imprima todos os outros números, cada um em uma linha separada.

Exemplo 1:

Se as entradas forem 1,2,3,4,5,6,7,8,9,10 e 3, a saída deve ser:

1
2
4
5
7
8
10
(Os números 3, 6 e 9 são pulados porque são divisíveis por 3)

Exemplo 2:

Se as entradas forem 10,15,20,25,30 e 5, a saída deve ser:

(Todos os números são divisíveis por 5, então nada é impresso)

Exemplo 3:

Se as entradas forem 7,14,21,10,5 e 7, a saída deve ser:

10
5 
-->
<?php
// Read input
$input = trim(fgets(STDIN));
$divisor = intval(trim(fgets(STDIN)));

// Convert comma-separated string to array of integers
$numbers = array_map('intval', explode(',', $input));

// Itera sobre cada número do array
foreach ($numbers as $num) {
    // Verifica se o número é divisível pelo divisor
    // O operador % (módulo) retorna o resto da divisão
    if ($num % $divisor === 0) {
        continue; // Pula para a próxima iteração se for divisível
    }
    
    // Imprime o número caso não tenha sido pulado
    echo $num . "\n";
}

?>
