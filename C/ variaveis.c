// Tipos de Dados

/*Em C, cada peça de dados no seu programa tem um tipo específico. Tipos de dados definem que tipo de dados uma variável pode conter e quanta memória ela precisa. Vamos olhar os tipos de dados básicos em C:

Crie uma variável inteira*/
int age;
// Isso declara uma variável chamada 'age' que pode conter números inteiros.

age = 25;
// Isso atribui o valor 25 a age. Mas você também pode declarar e inicializar em uma única etapa

int score = 100;

// Aqui estão os tipos de dados principais em C:
int number = 42;        // Inteiro (número inteiro)
float price = 10.5f;    // Ponto flutuante (decimal)
double pi = 3.14159;    // Ponto flutuante de precisão dupla
char grade = 'A';       // Caractere único

#include <stdio.h>

int main() {
    int price = 120;
    
    return 0;
}

// Inteiro
/*Em C, inteiros são números inteiros sem casas decimais. Eles são um dos tipos de dados mais comuns com os quais você trabalhará.

Declarando, inicializando e modificando inteiros:*/
int age; // Declarando
int score = 100; // Declarando e inicializando
score = 90; // Modificando

// Imprimindo um inteiro usando printf:
printf("%d", score);

// O tipo int armazena números inteiros.

#include <stdio.h>

int main() {
    // Declare an integer variable named 'number'
        int number;
    // Assign the value 50 to the variable
        number = 50;
    // Print the value using printf
        printf("The value is: %d", number);
    return 0;
}

// Ponto Flutuante - Duplo
/*Float e double são tipos de dados usados para armazenar números decimais em C.

Declare uma variável float:*/
float price = 19.99f;
/*Observe o sufixo 'f', que informa ao C que se trata de um valor float.

Declare uma variável double:*/
double pi = 3.14159265359;
/*As principais diferenças entre float e double:

Precisão: Double tem maior precisão que float
Float: ~7 dígitos decimais
Double: ~15 dígitos decimais
Tamanho:
Float: 4 bytes
Double: 8 bytes
Intervalo:
Float: 1.2E-38 a 3.4E+38
Double: 2.3E-308 a 1.7E+308

Imprima um valor float:
*/

float temperature = 98.6f;
printf("Temperature is %f degrees\n", temperature);

// Imprima com casas decimais específicas:
printf("Temperature is %.1f degrees\n", temperature);

//Isso mostrará: “Temperature is 98.6 degrees”

#include <stdio.h>

int main() {
    float celsius = 25.0f;
    double fahrenheit;
    
    fahrenheit = (celsius * 9.0/5.0) + 32.0;
    
    printf("%.1f degrees Celsius is equal to %.1f degrees Fahrenheit\n", celsius, fahrenheit);
    
    return 0;
}

// Saída

// 25.0 degrees Celsius is equal to 77.0 degrees Fahrenheit