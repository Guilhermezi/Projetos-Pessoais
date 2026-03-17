/*
Adicione as operações aritméticas básicas (adição, subtração, multiplicação e divisão) em num1 e num2. Armazene os resultados em variáveis nomeadas sum, difference, product e division, respectivamente. Imprima os resultados no console usando std::cout no seguinte formato:

Sum: [sum]
Difference: [difference]
Product: [product]
Division: [division]
*/
#include <iostream>

int main() {
    std::cout << "Calculator App" << std::endl;
    
    double num1, num2;
    std::cin >> num1;
    std::cin >> num2;

    // std::cout << "First number: " << num1 << std::endl;
    // std::cout << "Second number: " << num2 << std::endl;

    double sum, difference, product, division;

    sum = num1 + num2;
    difference = num1 - num2;
    product = num1 * num2;
    division = num1 / num2;

    std::cout << "Sum: " << sum << std::endl;
    std::cout << "Difference: " << difference << std::endl;
    std::cout << "Product: " << product << std::endl;
    std::cout << "Division: " << division << std::endl;
    
    return 0;
}
