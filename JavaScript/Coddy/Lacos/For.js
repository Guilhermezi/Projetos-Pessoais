/*
Às vezes, ao programar, é necessário realizar a mesma operação ou quase a mesma operação algumas vezes.

Para evitar escrever a mesma coisa repetidamente, podemos usar Loops.

O loop for tem a seguinte sintaxe

for (let i = start; i < end; i++) {
    code;
}
O let i = start determina o valor inicial de i, i < end determina a condição para o loop continuar, e i++ incrementa i após cada iteração. O i receberá todos os valores de start até end (não incluindo <strong>end</strong>) sequencialmente. Por exemplo:

for (let i = 0; i < 5; i++) {
    console.log(i);
}
Ele executará a instrução print 5 vezes:

0
1
2
3
4
Loops têm muitos casos de uso. Por exemplo, vamos somar todos os números de 1 a 100:

let sum_numbers = 0;
for (let i = 1; i <= 100; i++) {
    sum_numbers += i;
}
console.log(sum_numbers);
Isso primeiro percorrerá todos os números entre 1 e 100 (incluindo 100) e somará todos eles. Em seguida, imprimirá a variável sum_numbers

challenge icon
Desafio

Iniciante
Escreva um programa que imprima "Hello Coddy: " e o valor i de 3 a 27 (inclusive, 25 vezes no total), faça isso usando um loop for.

Ficará assim:

Hello Coddy: 3
Hello Coddy: 4
...
Hello Coddy: 27

*/
for (i = 3; i <= 27; i++) {
    console.log(`Hello Coddy: ${i}`)
}