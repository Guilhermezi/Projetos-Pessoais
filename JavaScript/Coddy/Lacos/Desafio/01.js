/*
Escreva um programa que calcule e imprima a tabela de multiplicação do 7 (de 1 a 10) usando um laço for.

Seu programa deve exibir cada passo do cálculo neste formato:

7 x i = result
Saída esperada:

7 x 1 = 7
7 x 2 = 14
7 x 3 = 21
...
7 x 10 = 70

*/
for (let i = 1; i <= 10; i++) {
    const result = 7 * i;
    console.log(`7 x ${i} = ${result}`);
}