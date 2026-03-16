/*
Desafio

Iniciante
Escreva um programa que leia a idade do usuário como entrada.

O programa deve imprimir o número de anos faltantes até 120 (em um formato específico, mostrado abaixo).

Por exemplo, para a entrada 25, a saída esperada é "95 years till 120".

Certifique-se de não imprimir nada mais!
*/
#include <iostream>

int main() {
    int age;
    // Lê a idade do usuário
    std::cin >> age;
    
    // Calcula os anos restantes
    int yearsLeft = 120 - age;
    
    // Imprime exatamente o formato solicitado
    std::cout << yearsLeft << " years till 120" << std::endl;
    
    return 0;
}
