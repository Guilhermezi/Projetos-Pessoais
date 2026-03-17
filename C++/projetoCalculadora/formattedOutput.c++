/*
Modifique a saída para que ela sempre imprima um valor double com duas casas decimais. Para fazer isso, use o operador << com std::fixed e std::setprecision(2):

#include <iomanip>

std::cout << std::fixed << std::setprecision(2) << num;
Você precisará incluir <iomanip>
*/

#include <iostream>
#include <iomanip> // Necessário para o setprecision

int main() {
    std::cout << "Calculator App" << std::endl;
    
    double num1, num2;
    std::cin >> num1;
    std::cin >> num2;

    double sum, difference, product, division;

    sum = num1 + num2;
    difference = num1 - num2;
    product = num1 * num2;
    division = num1 / num2;

    // Ativa a formatação fixa com 2 casas decimais para as próximas linhas
    std::cout << std::fixed << std::setprecision(2);

    std::cout << "Sum: " << sum << std::endl;
    std::cout << "Difference: " << difference << std::endl;
    std::cout << "Product: " << product << std::endl;
    std::cout << "Division: " << division << std::endl;
    
    return 0;
}
