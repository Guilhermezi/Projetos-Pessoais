/*
Uma função é uma sequência de código que tem um nome. O propósito de uma função é reutilizar um pedaço de código várias vezes.

Por exemplo, dê uma olhada neste código:

std::cout << "Welcome to Coddy";
std::cout << "New session...";
std::cout << "Welcome to Coddy";
std::cout << "Another session...";
std::cout << "Welcome to Coddy";
Usamos o mesmo código std::cout << "Welcome to Coddy"; repetidamente. Outro problema com este código é que, se quiséssemos mudar a mensagem: Welcome to Coddy para algo diferente, como "Welcome aboard", teríamos que alterar 3 linhas diferentes de código. Para resolver esse problema, usaremos funções.

Para declarar uma função, usamos a seguinte sintaxe:

access_modifier return_type function_name(parameters) {
    // code
}
Para o nosso exemplo, criaremos uma função chamada greet e ela ficará assim:

void greet() {
    std::cout << "Welcome to Coddy";
}
Para usar/chamar/executar a função, escrevemos greet();:

int main() {
    greet();
    std::cout << "New session...";
    greet();
    std::cout << "Another session...";
    greet();
    return 0;
}
Isso resultará na mesma saída de cima.

Importante! O código da função deve vir antes de sua chamada/execução


Desafio

Fácil
Escreva um programa que recebe uma entrada, um número. O número de entrada indica quantas vezes executar a função descrita abaixo. 

Crie uma função que calcula a soma de todos os números entre 1 e 1000 (incluindo) e a imprime, nomeie a função como quiser.

Nota! No seu código, escreva a função antes de sua chamada/execução.



*/
#include <iostream>

// Declaração da função
void calcularSoma() {
    int soma = 0;
    for (int i = 1; i <= 1000; i++) {
        soma += i;
    }
    std::cout << soma << std::endl;
}

int main() {
    int n;
    // Recebe quantas vezes a função deve ser executada
    if (!(std::cin >> n)) return 0; 

    for (int i = 0; i < n; i++) {
        // Chamada da função
        calcularSoma();
    }
    
    return 0;
}
