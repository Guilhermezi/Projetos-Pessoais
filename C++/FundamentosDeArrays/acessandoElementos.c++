/*
Em C++, usamos arrays para armazenar múltiplos valores em uma única variável. Cada valor em um array é chamado de elemento, e cada elemento possui um índice.

Os índices começam de 0 até o comprimento do array menos um. Por exemplo, dê uma olhada no próximo array: 

char letters[] = {'a', 'b', 'c', 'd', 'e', 'f', 'g'};
Elemento a está no índice 0
Elemento b está no índice 1
...
Elemento g está no índice 6
Para acessar um elemento de um array, podemos usar seu índice entre colchetes. Por exemplo, para acessar o primeiro elemento de um array chamado letters, usaríamos letters[0].

Aqui está um exemplo:

int numbers[] = {10, 20, 30, 40, 50};
int element = numbers[2];
A variável element conterá o valor 30 porque ela acessa o terceiro elemento (que possui um índice de 2).


Desafio

Fácil
Crie uma função chamada values que recebe um array e seu tamanho como argumento e imprime todos os itens do array um após o outro.



*/
#include <iostream>

void values(int arr[], int size) {
    for (int i = 0; i < size; i++) {
        // Write code here
        std::cout << arr[i] << std::endl;
    }

}

int main() {
    int numbers[] = {109, 4, 7, 19, 57, 216, 68, 89, 132, 63};
    int size = std::size(numbers);
    values(numbers, size);
    return 0;
}