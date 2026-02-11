/*Em C, o tipo de dados char é usado para armazenar um único caractere. Caracteres em C são delimitados por aspas simples.

Declare uma variável de caractere: */
char letter;

// Atribua um caractere à variável:
letter = 'A';

// Você também pode declarar e inicializar em uma linha:
char grade = 'B';

/*Um caractere ocupa 1 byte de memória e é na verdade armazenado como um inteiro representando seu valor ASCII. Por exemplo, 'A' é armazenado como 65, 'B' como 66, e assim por diante.

Você pode imprimir um caractere usando o especificador de formato %c:*/
printf("The letter is: %c\n", letter);

/*Desafio

Fácil
Crie um programa que:

Declara uma variável de caractere chamada symbol
Atribui o caractere '@' a esta variável
Imprime a mensagem "The symbol is: @" onde @ é o valor da sua variável*/

#include <stdio.h>

int main() {
    // Write your code here
    char symbol = '@';
    printf("The symbol is: %c", symbol);
    return 0;
}