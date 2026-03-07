/*
A instrução switch é como uma instrução if de múltiplas vias. Em vez de avaliar uma única condição, ela verifica o valor de uma variável contra múltiplos casos e executa o código associado ao caso correspondente.

Aqui está a estrutura básica de uma instrução switch:

switch (variable) {
    case value1:
        // Código para executar se variable for igual a value1
        break;
    case value2:
        // Código para executar se variable for igual a value2
        break;
    // ... mais casos
    default:
        // Código para executar se nenhum caso corresponder
}
A palavra-chave switch é seguida pela variável que você deseja testar entre parênteses.
Cada case representa um possível valor da variável.
O código dentro de cada case é executado se a variável corresponder ao valor desse caso.
A instrução break é crucial; ela sai do switch após um caso ser executado. Sem ela, a execução faria "fall through" para o próximo caso.
O caso default é opcional e é executado se nenhum outro caso corresponder.
Aqui está um exemplo:

int day = 3;
std::string dayName;

switch (day) {
    case 1:
        dayName = "Monday";
        break;
    case 2:
        dayName = "Tuesday";
        break;
    // ... cases for other days
    default:
        dayName = "Invalid day";
}
Você também pode combinar múltiplos casos em um só:

int day = 3;
std::string dayName;

switch (day) {
    case 1:
    case 2:
    case 3:
        dayName = "Start of week";
        break;
    // ... cases for other days
    default:
        dayName = "Invalid day";
}

Desafio

Iniciante
Crie um programa que recebe um número de mês (1 para Janeiro, 2 para Fevereiro, etc.) e imprime a estação a que ele pertence. Use uma instrução switch para a lógica.

As estações e seus meses correspondentes são:

Winter: Dezembro (12), Janeiro (1), Fevereiro (2)
Spring: Março (3), Abril (4), Maio (5)
Summer: Junho (6), Julho (7), Agosto (8)
Autumn: Setembro (9), Outubro (10), Novembro (11)
Invalid month: para outras opções
*/
#include <iostream>

int main() {
    int month;
    std::cin >> month;
    std::string season = "";
    
    // Write your code below
    switch (month){
        case 1:
        case 2:
            season = "Winter";
            break;
        case 3:
        case 4:
        case 5:
            season = "Spring";
            break;
        case 6:
        case 7:
        case 8:
            season = "Summer";
            break;
        case 9:
        case 10:
        case 11:
            season = "Autumn";
            break;
        case 12:
            season = "Winter";
            break;
        default:
            season = "Invalid month";
    }
    
    std::cout << season << std::endl;
    return 0;
}