/*
O operador módulo % dá o resto de uma divisão. Em Java, é usado com uma sintaxe simples:

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
Ao usar módulo com números de ponto flutuante (doubles), funciona de forma semelhante aos inteiros, mas mantém a precisão decimal. Por exemplo:

double result = 5.2 % 2.0;
// result é 1.2
Aqui está como funciona: 2.0 cabe em 5.2 duas vezes (4.0), e o resto é 1.2 (5.2 - 4.0 = 1.2).

Outro exemplo:

double result = 7.8 % 3.5;
// result é 0.8

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

public class modulo {
    public class Main {
    public static void main(String[] args) {
        // Type your code below
        int a = 9;
        double b = 2.6;
        int c = 11;

        int d = a % 2;
        int e = a % 3;
        double f = b % 1.5;
        double g = b % 3.9;
        int h = c % 10;
        
        // Don't change the line below
        System.out.println("a = " + a);
        System.out.println("b = " + b);
        System.out.println("c = " + c);
        System.out.println("d = " + d);
        System.out.println("e = " + e);
        System.out.println("f = " + f);
        System.out.println("g = " + g);
        System.out.println("h = " + h);
    }
}
}
