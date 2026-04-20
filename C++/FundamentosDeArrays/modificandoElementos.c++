/*
Além de acessar os elementos de um array, você também pode modificá-los. Para modificar um elemento específico em um array, você pode atribuir um novo valor a ele usando seu índice.

Aqui está um exemplo:

std::string my_array[] = {"apple", "banana", "cherry"};
my_array[1] = "orange";
std::cout << my_array[0] << ", " << my_array[1] << ", " << my_array[2] << std::endl;
Saída:

apple, orange, cherry
banana foi alterado para um orange


Desafio

Fácil
Crie um programa que:

Receba três entradas nesta ordem:
n: o número de elementos no array
index: uma posição de índice (0 a n-1)
newElement: um novo valor (string)
Em seguida, receba n strings para preencher o array
Modifique o array substituindo o elemento no index pelo valor newElement
Finalmente, imprima todos os elementos do array modificado, um por linha
Por exemplo, para esta entrada:

3
1
hello
apple
banana
cherry
A saída é:

apple
hello
cherry
Explicação: Temos 3 elementos. Substituímos o índice 1 (banana) por "hello".



*/
#include <iostream>
#include <string>

int main() {
    int n;
    int index;
    std::string newElement;
    
    std::cin >> n;
    std::cin >> index;
    std::cin.ignore(); // Limpa o buffer após ler o index
    std::getline(std::cin, newElement);
    
    std::string arr[n]; 

    // Preenche o array com n strings
    for (int i = 0; i < n; i++) {
        std::getline(std::cin, arr[i]);
    }
    
    // Modifica o elemento no índice especificado
    if (index >= 0 && index < n) {
        arr[index] = newElement;
    }
    
    // Imprime o array modificado, um elemento por linha
    for (int i = 0; i < n; i++) {
        std::cout << arr[i] << std::endl;
    }

    return 0;
}
