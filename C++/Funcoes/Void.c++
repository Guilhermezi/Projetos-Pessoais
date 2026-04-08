/*
Em C++, uma função void é uma função que não retorna nenhum valor. Quando você declara uma função como void, isso indica que a função executa uma tarefa ou um conjunto de operações, mas não produz um resultado que precisa ser retornado ao chamador. Funções void são usadas quando você deseja executar ações como imprimir saída, modificar estados de objetos ou executar uma sequência de instruções sem retornar um valor específico.

Aqui está a estrutura básica de uma função void:

void functionName(parameters) {
    // Code to be executed
}

Desafio

Fácil
Crie uma função void chamada printNTimes. Esta função deve receber dois argumentos:

Uma string message.
Um inteiro n.
A função deve imprimir a message no console n vezes. Use um laço for para repetir a impressão.

Na função main, chame printNTimes com as entradas message e a entrada n

*/
#include <iostream>
#include <string>

// Função void: executa a ação de imprimir, mas não retorna valor
void printNTimes(std::string message, int n) {
    for (int i = 0; i < n; i++) {
        std::cout << message << std::endl;
    }
}

int main() {
    std::string msg;
    int n;

    // Lê a linha inteira (incluindo espaços) para a mensagem
    std::getline(std::cin, msg); 
    
    // Lê o número de repetições
    std::cin >> n;

    // Chama a função void diretamente
    printNTimes(msg, n);

    return 0;
}

