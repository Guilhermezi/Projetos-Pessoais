/*
A declaração continue para a iteração atual e continua para a próxima iteração. Por exemplo:

for (int i = 3; i < 9; i++) {
    if (i == 5) {
        continue;
    }
    std::cout << i << std::endl;
}
O loop iterará através de todos os números. Quando atingir ⁣i=5 ele pulará essa iteração e continuará para a próxima. A saída é:

3
4
6
7
8
Observe que o número 5 não está na saída.


Desafio

Iniciante
Você recebe um código que imprime os números de 1 a 20 (incluindo).

Sua tarefa é adicionar instruções if e continue para que apenas os números pares sejam impressos (2, 4, 6, ...). 
*/

#include <iostream>

int main() {
    for (int i = 1; i <= 20; i++) {
        if (i % 2 != 0) {
            continue;
        }
        std::cout << i << std::endl;
    }
    return 0;
}
