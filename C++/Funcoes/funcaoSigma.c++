/*
Desafio

Fácil
Escreva uma função chamada sigma com um argumento que representa um número n.

A função irá retornar a soma de todos os números de 1 até n (inclusive).

Por exemplo, para sigma(5), a função retornará 15, porque 15 = 1 + 2 + 3 + 4 + 5.

*/
#include <iostream>

// Função que calcula a soma de 1 até n
int sigma(int n) {
    int sum = 0;
    // Percorre todos os números de 1 até n (inclusive)
    for (int i = 1; i <= n; i++) {
        sum += i; // Adiciona o valor atual de i à variável sum
    }
    return sum; // Retorna o total acumulado
}

int main() {
    int n;
    
    // Lê a entrada do usuário
    if (!(std::cin >> n)) {
        return 0;
    }

    // Chama a função e armazena o resultado
    int res = sigma(n);
    
    // Imprime o resultado final
    std::cout << res << std::endl;
    
    return 0;
}
