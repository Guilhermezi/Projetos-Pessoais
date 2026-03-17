/*
Agora que temos uma mensagem de boas-vindas, é hora de obter os números para nossos cálculos. Em C++, usamos o objeto std::cin para obter entrada do usuário. Para nossa calculadora, precisamos de dois números para realizar operações como adição, subtração, multiplicação e divisão.

Modifique o código fornecido para obter dois números double do usuário e armazená-los em variáveis chamadas num1 e num2. Use std::cin para ler os números. Após obter os números, imprima-os no console usando std::cout no seguinte formato:

First number: [first number]
Second number: [second number]
*/
#include <iostream>

int main() {
    std::cout << "Calculator App" << std::endl;
    
    double num1,num2;
    std::cin >> num1;
    std::cin >> num2;

    std::cout << "First number: " << num1 << std::endl;
    std::cout << "Second number: " << num2 << std::endl;

    return 0;
}