/*
O operador módulo % dá o resto de uma divisão. Em C++, ele é usado com uma sintaxe simples:

result = dividend % divisor;
dividend: O número que está sendo dividido.
divisor: O número que divide o dividendo.
result: O resto da divisão.
Por exemplo:

result = 10 % 3;
Aqui, 10 é dividido por 3. 3 cabe em 10 três vezes, com um resto de 1. Então, result será 1.

Normalmente, o módulo é usado para verificar se um número é par ou ímpar:

Se um número é par, dividi-lo por 2 deixará um resto de 0.
Se um número é ímpar, dividi-lo por 2 deixará um resto de 1.
Ao trabalhar com números de ponto flutuante (doubles) em C++, você não pode usar o operador módulo % diretamente. Em vez disso, você precisa usar a função fmod() da biblioteca <cmath>. Ela funciona de forma semelhante ao operador módulo, mas mantém a precisão decimal. Por exemplo:

#include <cmath>

double result = fmod(5.2, 2.0);
// result é 1.2
Veja como funciona: 2.0 cabe em 5.2 duas vezes (4.0), e o resto é 1.2 (5.2 - 4.0 = 1.2).

Outro exemplo:

double result = fmod(7.8, 3.5);
// result é 0.8
Quando o divisor é maior que o dividendo, o resultado é igual ao dividendo. Isso se aplica tanto ao % quanto ao fmod().

5 % 10 = 5
3 % 7 = 3
fmod(2.5, 8.0) = 2.5
Por quê? O divisor cabe zero vezes, então todo o dividendo é o resto.

Desafio

Iniciante
Escreva um código que inicializa três variáveis, a (int), b (double) e c (int) com os valores 9, 2.6 e 11 (respectivamente).

Depois disso, inicialize as seguintes variáveis:

d (int) que conterá o resultado de a módulo 2 
e (int) que conterá o resultado de a módulo 3
f (double) que conterá o resultado de b módulo 1.5
g (double) que conterá o resultado de b módulo 3.9
h (int) que conterá o resultado de c módulo 10
Confira o resultado e veja como diferentes dividendos e divisores afetam o resultado.
*/
#include <iostream>
#include <cmath>

int main() {
    // Type your code below
    int a = 9;
    double b = 2.6;
    int c = 11;

    int d = a % 2;
    int e = a % 3;
    double f = fmod(b, 1.5);
    double g = fmod(b, 3.9);
    int h = c % 10;
    
    // Don't change the line below
    std::cout << "a = " << a << std::endl;
    std::cout << "b = " << b << std::endl;
    std::cout << "c = " << c << std::endl;
    std::cout << "d = " << d << std::endl;
    std::cout << "e = " << e << std::endl;
    std::cout << "f = " << f << std::endl;
    std::cout << "g = " << g << std::endl;
    std::cout << "h = " << h << std::endl;
    return 0;
}