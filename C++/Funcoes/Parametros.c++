/*
Um argumento em uma função é um valor que você passa para a função quando a chama. Para adicionar argumentos a uma função, escrevemos eles dentro dos parênteses ():

return_type method_name(data_type arg1, data_type arg2, ...) {
    // code
}
Podemos nomear os argumentos seguindo as mesmas regras que os nomes de variáveis: eles podem conter letras, dígitos e underscores, mas não podem começar com um dígito ou conter caracteres especiais. Podemos escrever quantos argumentos precisarmos.

Para chamar uma função e passar argumentos para ela, escrevemos:

method_name(value1, value2, value3, ...);
Passar argumentos demais para uma função que espera menos argumentos fará com que o programa falhe

Exemplo de uso:

void isEven(int number) {
    if (number % 2 == 0) {
        std::cout << number << " is even" << std::endl;
    } else {
        std::cout << number << " is odd" << std::endl;
    }
}
int main() {
    for (int i = 15; i < 34; i++) {
        isEven(i);
    }
    for (int i = 153; i < 219; i++) {
        isEven(i);
    }
    return 0;
}
Aqui temos uma função chamada isEven que aceita um argumento chamado number e imprime se o número é par ou ímpar. Em seguida, chamamos a função duas vezes: uma para todos os números entre 15 e 34, e a segunda vez para todos os números entre 153 e 219.


Desafio

Fácil
Escreva um programa que recebe dois números int como entrada. Os números de entrada são os argumentos da função. 

Crie uma função que recebe dois argumentos, calcula o produto deles e imprime. Nomeie a função como quiser.

Chame a função com esses números de entrada.


*/

#include <iostream>

// Declaração da função
void calcularProduto(int num1, int num2) {
    int produto = num1 * num2;
    std::cout << produto << std::endl;
}

int main() {
    int a, b;
    
    // Lendo a entrada do usuário
    if (std::cin >> a >> b) {
        // Chamada da função com a e b como argumentos
        calcularProduto(a, b);
    }
    
    return 0;
}
