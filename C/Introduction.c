// C Language
/*C é uma linguagem de programação poderosa e eficiente que fornece acesso de baixo nível à memória enquanto mantém alto desempenho. É ideal para programação de sistemas, sistemas embarcados e sistemas operacionais, oferecendo controle detalhado sobre hardware e gerenciamento de memória.*/

// Hello World!
/*O programa "Hello World!" é simples e exibe Hello, World! na tela. Ele é frequentemente usado como o primeiro programa ao aprender uma nova linguagem de programação.

Em C, usamos a função printf() para imprimir saída no console. O texto a ser impresso é colocado entre aspas duplas e seguido por um ponto e vírgula.*/

#include <stdio.h>

int main() {
    printf("Hello, World!");
}

// A linha #include <stdio.h> inclui a biblioteca padrão de entrada/saída, que contém a função printf().

// Basic Program Structure
// Todo programa em C deve começar com diretivas de cabeçalho como:
 #include <stdio.h> // Cabeçalho para entrada/saída
 #include <math.h> // Cabeçalho para funções matemáticas

 /*Essas diretivas incluem arquivos de cabeçalho contendo declarações para funções e objetos que seu programa usa.

Todo código executável deve estar dentro da função main(), que é o ponto de entrada do programa. Por exemplo:*/
#include <stdio.h> // Cabeçalho para entrada/saída

int main() { // Função principal
    printf("This is my first C program!"); // Instrução de saída
    return 0; // Instrução de retorno - não obrigatória no C moderno 
}

/*Lembre-se, toda declaração termina com um ponto e vírgula (;), exceto por blocos de código em chaves {}. O ponto e vírgula é obrigatório e informa ao C que você chegou ao fim de uma declaração.*/

#include <stdio.h>

int main() {
    // Your code here
    printf ("This is my first C program!");
    return 0;
}