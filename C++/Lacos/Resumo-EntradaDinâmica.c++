/*
Escreva um programa que primeiro aceita um inteiro n, representando quantos números inteiros adicionais serão inseridos em seguida. Em seguida, leia exatamente n números inteiros da entrada. Finalmente, calcule e imprima a soma desses n números (excluindo a primeira entrada).

Input:
3
1
5
6

Output:
12
Explicação:

O primeiro número 3 significa que os próximos 3 números (1, 5 e 6) serão lidos e somados. O total é 1 + 5 + 6 = 12


*/
#include <iostream>

int main() {
    int numLoops;
    std::cin >> numLoops;
    int sum = 0;
    
    // Escreva seu código abaixo
    for (int i = 0; i < numLoops; i++) {
        int num;
        std::cin >> num; // Lê cada um dos n números
        sum += num;      // Adiciona o número à soma total
    }

    std::cout << sum << std::endl; // Imprime o resultado final

    return 0;
}
