/*
As instruções if permitem que executemos código com condições.

Por exemplo, vamos olhar o seguinte código:

int age = 20;
std::string status = "Child";
if (age > 18) {
    status = "Adult";
}
age += 1;
O código acima verifica se a variável age é maior que 18. Se for, ele definirá status para conter a string "Adult".

No final, o código incrementará age por 1, independentemente de a idade ser maior que 18 ou não.

 

Para usar uma instrução if em C++, precisamos usar chaves {} para definir o bloco de código, e tudo dentro da instrução if deve ser colocado entre essas chaves:

if (condition) {
    code;
    code;
    code;
}
Se a condição for true, entraremos no bloco de código dentro do if (O código indentado)


Desafio

Iniciante
Você recebe um código.

As variáveis a e b têm valores ausentes, preencha-as para que o código dentro da declaração if seja executado e c seja igual a 3.

Tire um momento para analisar a condição na declaração if e pense sobre quais valores a tornariam verdadeira.

Bônus: tente encontrar mais de uma solução!

*/
#include <iostream>

int main() {
    int a = 15;
    int b = 11;
    
    // Don't change below this line
    int c = 0;
    if (a >= b && !(b < 10)) {
        c = 2;
    }
    
    c += 1;
    std::cout << "c = " << c;
    return 0;
}