<!-- Loops permitem que você execute um bloco de código várias vezes sem escrevê-lo repetidamente. O loop for é ideal quando você sabe exatamente quantas vezes deseja repetir algo.

Um loop for tem três partes separadas por ponto e vírgula: inicialização, condição e incremento.

<?php
for ($i = 1; $i <= 5; $i++) {
    echo $i . "\n";
}
?>
Isso produz os números de 1 a 5, cada um em uma nova linha. Aqui está como funciona:

$i = 1 — define o valor inicial (executa uma vez)
$i <= 5 — verifica se o loop deve continuar
$i++ — aumenta $i após cada iteração
O loop continua executando enquanto a condição for verdadeira. Uma vez que $i se torna 6, a condição falha e o loop para.

Você também pode contar para trás ou usar valores de passo diferentes:

<?php
for ($i = 10; $i >= 0; $i -= 2) {
    echo $i . "\n";
}
?>
Isso conta de trás para frente de 10 a 0 de dois em dois: 10, 8, 6, 4, 2, 0.


Desafio

Fácil
Leia dois inteiros da entrada: um número inicial e um número final.

Use um loop for para imprimir todos os números do número inicial ao número final (inclusivo), cada um em uma linha separada.

Exemplo 1:

Se as entradas forem 3 e 7, a saída deve ser:

3
4
5
6
7
Exemplo 2:

Se as entradas forem 1 e 4, a saída deve ser:

1
2
3
4 -->

<?php
// Read input
$start = intval(fgets(STDIN));
$end = intval(fgets(STDIN));

// Loop de $start até $end inclusive
for ($i = $start; $i <= $end; $i++) {
    echo $i . "\n";
}
?>
