/*
Os operadores de incremento e decremento são usados para aumentar ou diminuir o valor de uma variável em 1. Esses operadores são amplamente usados em programação, especialmente em loops e contadores.

O operador de incremento é representado por dois sinais de mais ++, e o operador de decremento é representado por dois sinais de menos --.

Por exemplo, para incrementar uma variável chamada count, você pode usar o operador de incremento assim:

int count = 5;
count++; // count is now 6
Da mesma forma, para decrementar uma variável chamada value, você pode usar o operador de decremento assim:

int value = 10;
value--; // value is now 9
Os operadores ++ e -- são atalhos especiais que SOMENTE funcionam para adicionar ou subtrair 1. Não há um operador ** ou similar para multiplicação.
Para operações aritméticas regulares (como multiplicação, divisão, ou adicionar/subtrair quantidades diferentes de 1), você deve usar o padrão de atribuição:

int count = 5;
count = count + 3;  // Add 3: count is now 8
count = count * 2;  // Multiply by 2: count is now 16
count = count - 4;  // Subtract 4: count is now 12

Desafio

Iniciante
Você recebe um código com a inicialização de count. (Não apague esta linha!)

Sua tarefa é adicionar as seguintes operações, nesta ordem:

Utilize o operador de incremento (++) quatro vezes para adicionar 4 a count
Utilize o operador de multiplicação (*) para multiplicar count por 2
Utilize o operador de decremento (--) uma vez para subtrair 1 de count
*/
#include <iostream>

int main() {
    int count = 0;
    
    // Type your code below
    count++;
    count++;
    count++;
    count++;

    count = count * 2;

    count--;
    // Don\'t change the line below
    std::cout << "count = " << count;
    return 0;
}