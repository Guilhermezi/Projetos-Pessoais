/*
Desafio

Fácil
Escreva um programa que recebe um array de números do tipo double e o tamanho do array como argumento, e imprime o array invertido.

Por exemplo, para [1, 2, 3], a saída esperada é [3, 2, 1].

Para iterar de trás para frente, você precisa começar com um número maior que 0 e decrementar i:

for (int i = n - 1; i>=0; i--) {...}

*/
#include <iostream>
#include <vector>

int main() {
    int n;

    std::cin >> n;
    std::cin.ignore();
    double arr[n];

    for (int i = 0; i < n; i++) {
        double val;
        std::cin >> val;
        arr[i] = val;
    }

    double reverseArr[n];

    for (int i = 0; i < n; i++) {
        reverseArr[i] = arr[n - 1 - i];
    }

    for (int i = 0; i < n; i++) {
        std::cout << reverseArr[i] << std::endl;
    }
    return 0;
}