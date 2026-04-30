/*
O loop do-while é semelhante ao loop while, mas com uma diferença chave: o bloco de código é executado pelo menos uma vez antes que a condição seja verificada. Isso significa que o corpo do loop sempre executará na primeira vez, independentemente de a condição ser verdadeira ou falsa.

Aqui está a estrutura básica de um do-while loop:

do {
    // Código a ser executado
} while (condition);
A palavra-chave do marca o início do loop, seguida pelo bloco de código entre chaves. Após o bloco de código, a palavra-chave while introduz a condição. O loop continuará a executar enquanto a condição for true.

Aqui está um exemplo:

int count = 0;
do {
    System.out.println("Count: " + count);
    count++;
} while (count < 5);
Neste exemplo, o código dentro do bloco do será executado primeiro, imprimindo "Count: 0" e incrementando count para 1. Em seguida, a condição count < 5 é verificada. Como é true, o loop continua.

Este processo se repete até que count se torne 5, momento em que a condição se torna false e o loop termina.

A saída deste código será:

Count: 0
Count: 1
Count: 2
Count: 3
Count: 4
challenge icon
Desafio

Iniciante
Escreva um programa Java que usa um loop do-while para fazer o seguinte:

Inicialize uma variável sum para 0.
Inicialize uma variável number para 1.
Em cada iteração, adicione number a sum.
Incremente number por 2 em cada iteração (ou seja, 1, 3, 5, ...).
imprima number e sum:
Sum is: [The sum value]
Num is: [The number value]
Continue o loop enquanto number for menor ou igual a 50.
Imprima o valor final de sum após o loop terminar: Final Sum: [The final sum value]
*/
public class Main {
    public static void main(String[] args) {
        // Initialize variables
        int sum = 0;
        int number = 1;

        // Your code here
        do {
            sum += number;
            number += 2;
            System.out.println("Sum is: " + sum);
            System.out.println("Num is: " + number);
        } while (number <= 50);

        // Print the final sum
        System.out.println("Final Sum: " + sum);
    }
}
