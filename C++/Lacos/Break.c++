/*
A declaração break para o loop instantaneamente quando é encontrada.

Por exemplo,

for (int i = 0; i < 10; i++) {
    if (i == 6) {
        break;
    }
    std::cout << i << std::endl;
}
No exemplo a seguir, o loop itera regularmente até alcançar o número 6. Então, o programa entra na declaração if e executa a declaração break. Isso sai do loop imediatamente. A saída é:

0
1
2
3
4
5

Desafio

Iniciante
Você recebe um código que imprime os números de 1 a 20 (incluindo).

Sua tarefa é adicionar instruções if e break para que apenas os números de 1 a 15 sejam impressos, o loop sairá antes de imprimir os números de 16 a 20.
*/
#include <iostream>

int main() {
    for (int i = 1; i <= 20; i++) {
        std::cout << i << std::endl;
        if (i == 15) {
            break;
        }
    }
    return 0;
}