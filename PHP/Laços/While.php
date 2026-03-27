<!-- Embora o loop for funcione muito bem quando você sabe o número exato de iterações, o loop while é perfeito quando você quer continuar iterando até que uma condição se torne falsa.

O loop while verifica sua condição antes de cada iteração. Se a condição for verdadeira, o código dentro executa. Isso continua até que a condição se torne falsa.

<?php
$count = 1;

while ($count <= 3) {
    echo "Count: $count\n";
    $count++;
}
?>
Isso produz:

Count: 1
Count: 2
Count: 3
O loop começa verificando se $count <= 3. Como é verdadeiro, o código executa e incrementa $count. Quando $count atinge 4, a condição falha e o loop para.

Importante: Sempre garanta que algo dentro do loop eventualmente torne a condição falsa. Caso contrário, você criará um loop infinito que nunca para de executar.

<?php
$total = 0;
$num = 1;

while ($total < 10) {
    $total += $num;
    $num++;
}

echo $total;
?>
Isso continua adicionando números até que o total atinja ou exceda 10, então exibe o valor final.


Desafio

Fácil
Leia um único inteiro da entrada representando uma soma alvo.

Use um loop while para adicionar números consecutivos começando de 1 (1, 2, 3, 4, ...) até que o total atinja ou exceda a soma alvo.

Imprima o total final na primeira linha, e o último número que foi adicionado na segunda linha.

Exemplo 1:

Se a entrada for 10, a saída deve ser:

10
4
(1 + 2 + 3 + 4 = 10, que atinge o alvo)

Exemplo 2:

Se a entrada for 15, a saída deve ser:

15
5
(1 + 2 + 3 + 4 + 5 = 15)

Exemplo 3:

Se a entrada for 7, a saída deve ser:

10
4
(1 + 2 + 3 + 4 = 10, que excede 7) -->

<?php
// Read the target sum
$target = intval(fgets(STDIN));

// Initialize variables
$total = 0;
$num = 0;

// Enquanto o total for menor que o alvo, continue somando
while ($total < $target) {
    $num++;          // Incrementa para o próximo número consecutivo (1, 2, 3...)
    $total += $num;  // Adiciona esse número ao total acumulado
}

// Output the final total and the last number added
echo $total . "\n";
echo $num;
?>
