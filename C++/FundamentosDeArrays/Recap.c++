/*
Desafio

Fácil
Crie um programa que:

Recebe n: o número de elementos no array
Em seguida, recebe n strings para preencher o array
Imprima o array de forma elegante no seguinte formato:

[elem1, elem2, elem3, ...]

*/
#include <iostream>

int main() {
    int n;

    std::cin >> n;
    std::cin.ignore();
    std::string arr[n];
    
    for (int i = 0; i < n; i++) {
        std::string val;
        std::cin >> val;
        arr[i] = val;
    }
    
    // Print the array beautifully
    
    return 0;
}