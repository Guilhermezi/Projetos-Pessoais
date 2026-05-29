/*
O loop do...while é semelhante ao loop while, mas com uma diferença fundamental: o bloco de código é executado pelo menos uma vez antes que a condição seja verificada. Isso significa que o loop sempre executará o código uma vez e, em seguida, verificará se deve continuar.

Aqui está a sintaxe de um loop do...while:

do {
    code;
} while (condition);
O code dentro do bloco do é executado primeiro.

Então, a condition dentro do while é avaliada. Se a condição for true, o loop continua para a próxima iteração. Se a condição for false, o loop para.

Vejamos um exemplo:

let count = 0;
do {
    console.log(count);
    count++;
} while (count < 5);
Este código produzirá a seguinte saída:

0
1
2
3
4
Mesmo que o valor inicial de count seja maior ou igual a 5, o código dentro do bloco do ainda será executado uma vez.

Por exemplo:

let count = 6;
do {
    console.log(count);
    count++;
} while (count < 5);
Este código produzirá a seguinte saída:

6
Casos de uso para loops do...while são menos comuns do que loops for ou while, mas eles podem ser úteis em situações onde você precisa garantir que um bloco de código seja executado pelo menos uma vez, independentemente da condição.

challenge icon
Desafio

Iniciante
Escreva um loop do...while que comece com uma variável count definida como 5. O loop deve:

Imprimir o valor atual de count.
Diminuir count em 1 após cada iteração.
Enquanto count for maior que 0


*/
let count = 5;
do {
    console.log(count);
    count--;
} while (count > 0);