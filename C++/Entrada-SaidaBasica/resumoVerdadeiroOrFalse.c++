/*
Desafio

Iniciante
Escreva um programa que obtém uma entrada do usuário.

O programa exibirá "T" se a entrada for igual a “1” e "F" caso contrário.
*/
#include <iostream>
#include <string>

int main() {
    std::string inpt;
    std::cin >> inpt;

    if (inpt == "1") {
        std::cout << "T";
    } else {
        std::cout << "F";
    }
    
    return 0;
}
