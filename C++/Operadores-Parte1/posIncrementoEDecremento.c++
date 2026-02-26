/*
Na lição anterior, cobrimos os operadores de incremento (++) e decremento (--). Esses operadores têm duas formas: prefixo e postfixo.

A forma prefixo é escrita antes da variável (por exemplo, ++x ou --x), e a forma postfixo é escrita após a variável (por exemplo, x++ ou x--).

A diferença entre as duas formas é sutil, mas importante:

Forma prefixo: Incrementa/decrementa a variável e então retorna o novo valor.
Forma postfixo: Retorna o valor atual da variável e então a incrementa/decrementa.
Aqui está um exemplo para ilustrar a diferença:

int x = 5;
int y = x++;
// y = 5, x = 6 (postfix)

int a = 5;
int b = ++a;
// b = 6, a = 6 (prefix)
No primeiro caso, y é atribuído o valor original de x (5), e então x é incrementado para 6. No segundo caso, a é incrementado primeiro, e então seu novo valor (6) é atribuído a b.

A mesma lógica se aplica ao operador de decremento:

int x = 5;
int y = x--;
// y = 5, x = 4 (postfix)

int a = 5;
int b = --a;
// b = 4, a = 4 (prefix)

Desafio

Iniciante
Você recebe um código com inicializações de x, y e z. (Não delete essas linhas!)

Sua tarefa é usar os operadores de incremento/decremento para realizar as seguintes operações, nesta ordem:

Use o operador de incremento pós-fixo para atribuir o valor atual de x a a e depois incrementar x.
Use o operador de decremento pré-fixo para decrementar y e atribuir seu novo valor a b.
Use o operador de decremento pós-fixo para atribuir o valor atual de z a c e depois decrementar z.
Após realizar essas operações, imprima os valores de a, b, c, x, y e z no console no seguinte formato:

a: [value of a]
b: [value of b]
c: [value of c]
x: [value of x]
y: [value of y]
z: [value of z]
*/

#include <iostream>

int main() {
    int x = 10;
    int y = 20;
    int z = 30;
    
    int a, b, c;
    
    // Type your code below
    a = x++;
    b = --y;
    c = z--;
    
    // Don't change the lines below
    std::cout << "a: " << a << std::endl;
    std::cout << "b: " << b << std::endl;
    std::cout << "c: " << c << std::endl;
    std::cout << "x: " << x << std::endl;
    std::cout << "y: " << y << std::endl;
    std::cout << "z: " << z << std::endl;
    
    return 0;
}