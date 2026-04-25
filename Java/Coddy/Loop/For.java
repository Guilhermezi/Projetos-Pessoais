/*
Às vezes, ao programar, é necessário realizar a mesma ou quase a mesma operação algumas vezes.

Para evitar escrever a mesma coisa repetidamente, podemos usar Laços.

O laço for possui a seguinte sintaxe:

for (initialization; condition; update) {
    code
}
O initialization, condition e update determinam qual é o valor de start e qual é o valor de end.

Por exemplo, laço de 0 a 5 (não incluindo):

for (int i = 0; i < 5; i++) {
    System.out.println(i);
}
Ele executará a instrução print 5 vezes:

0
1
2
3
4
Os loops têm muitos casos de uso. Por exemplo, vamos somar todos os números de 1 a 100:

int sum_numbers = 0;
for (int i = 1; i <= 100; i++) {
    sum_numbers += i;
}
System.out.println(sum_numbers);
Isso irá primeiro percorrer todos os números entre 1 e 100 (incluindo 100 por causa do sinal <=) e somar todos eles, depois imprimirá a variável sum_numbers


Desafio

Iniciante
Escreva um programa que imprima "Hello Coddy: " e o valor de i de 3 a 27 (inclusive, o que significa imprimir os números 3, 4, 5, ..., 26, 27, totalizando 27 - 3 + 1 = 25 vezes), faça isso usando um laço for.

Ficará assim:

Hello Coddy: 3
Hello Coddy: 4
...
Hello Coddy: 27
*/
package Java.Coddy.Loop;

public class For {
    public static void main(String[] args) {
        for (int i = 3; i <= 27; i++) {
            System.out.println("Hello Coddy: " + i);
        }
    }
}

