/*
O loop do-while é semelhante ao loop while, mas com uma diferença chave: o bloco de código é executado pelo menos uma vez antes que a condição seja verificada. Isso significa que o corpo do loop sempre executará na primeira vez, independentemente de a condição ser verdadeira ou falsa.

Aqui está a estrutura básica de um loop do-while:

do {
    // Code to be executed
} while (condition);
A palavra-chave do marca o início do loop, seguida pelo bloco de código em chaves. Após o bloco de código, a palavra-chave while introduz a condição. O loop continuará a executar enquanto a condição for true.

Aqui está um exemplo:

int count = 0;
do {
    std::cout << "Count: " << count << std::endl;
    count++;
} while (count < 5);
Neste exemplo, o código dentro do bloco do será executado primeiro, imprimindo "Count: 0" e incrementando count para 1. Em seguida, a condição count < 5 é verificada. Como é true, o loop continua. Este processo se repete até que count se torne 5, momento em que a condição se torna false e o loop termina.

A saída deste código será:

Count: 0
Count: 1
Count: 2
Count: 3
Count: 4

Desafio

Iniciante
Escreva um programa em C++ que usa um loop do-while para fazer o seguinte:

Inicialize uma variável sum para 0.
Inicialize uma variável number para 1.
Em cada iteração, adicione number a sum.
Incremente number por 2 em cada iteração (ou seja, 1, 3, 5, ...).
imprima number e sum:
Sum is: [The sum value]
Num is: [The number value]
Continue o loop enquanto number for menor ou igual a 50.
Imprima o valor final de sum após o loop terminar: Final Sum: [The final sum value]

"The best way to learn is to build, break, and build again."
*/

#include <iostream>

int main() {
    int sum = 0;
    int number = 1;

    do {
        sum += number;      // 1. Soma primeiro
        number += 2;        // 2. Incrementa o número (ex: de 1 para 3)
        
        // 3. Imprime os valores já atualizados
        std::cout << "Sum is: " << sum << std::endl;
        std::cout << "Num is: " << number << std::endl;

    } while (number <= 50);

    std::cout << "Final Sum: " << sum << std::endl;
    return 0;
}

