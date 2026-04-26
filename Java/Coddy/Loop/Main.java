/*
Um while loop é diferente do for loop. Um for loop permite iterar sobre um range específico, enquanto um while loop permite continuar iterando enquanto uma determinada condição for atendida.

Para usar um laço while, escreva:

while (condition) {
	code
}
O código será executado apenas se a condição for true.

Existem muitos casos de uso em que um while resolveria o problema, mas o laço for não.


Desafio

Iniciante
Escreva um programa que recebe uma entrada, um número double.

Use um laço while para dividir a entrada por 2 enquanto o número for maior ou igual a 3.5.

Imprima o primeiro número que for menor que 3.5.
*/

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        double number = scanner.nextDouble();
        while (number >= 3.5) {
            number /= 2;
        }
        System.out.println(number);
        scanner.close();
    }
}
