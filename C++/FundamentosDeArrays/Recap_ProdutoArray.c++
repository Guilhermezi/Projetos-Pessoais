/*
Desafio

Fácil
Escreva uma função chamada prod que recebe um array de números do tipo double e o tamanho do array como argumentos e retorna o produto de todos os números no array.

Lembrete: o produto é a multiplicação de todos os números. Por exemplo, para [1, 2, 3], retorne 6 = 1 * 2 * 3.
*/
#include <iostream>


double prod(double arr[], int size) {
    if (size <= 0) return 0; 
    
    double resultado = 1.0;
    for (int i = 0; i < size; i++) {
        resultado *= arr[i];
    }
    return resultado;
}

int main() {
    int n;
    if (!(std::cin >> n)) return 0;

    double arr[n]; 
    for (int i = 0; i < n; i++) {
        std::cin >> arr[i];
    }

    double result = prod(arr, n);
    std::cout << "Product of array elements: " << result << std::endl;

    return 0;
}
