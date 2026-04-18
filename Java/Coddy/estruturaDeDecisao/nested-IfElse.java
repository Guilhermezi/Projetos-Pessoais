/*
Podemos aninhar instruções if-else if-else umas dentro das outras. Isso nos permite criar estruturas de tomada de decisão hierárquicas.

Por exemplo:

if (age > 18) {
    if (hasLicense) {
        System.out.println("You can drive");
    } else {
        System.out.println("Get a license first");
    }
} else {
    System.out.println("Too young to drive");
}

Pode ser aninhado infinitamente:

if (condition1) {
    if (condition2) {
        if (condition3) {
            // if condition1, condition2 and condition3 are true
            ...
        }
    }
}
Nota: Instruções if profundamente aninhadas podem tornar o código mais difícil de ler e manter. Tente limitar a profundidade de aninhamento sempre que possível.


Desafio

Iniciante
Crie um programa que verifica se alguém pode andar em uma montanha-russa. Os requisitos são:

Deve ter pelo menos 12 anos
Deve ter mais de 150 cm de altura
Se atenderem a ambos os requisitos, mas tiverem menos de 15 anos, precisam de supervisão de um adulto
Imprima exatamente estas mensagens para cada caso:

Se jovem demais: Sorry, you're too young
Se não alto o suficiente: Sorry, you're not tall enough
Se menor de 15 e sem adulto: Sorry, you need an adult with you
Se menor de 15 com adulto: You can ride with adult supervision!
Se 15 ou mais e alto o suficiente: You can ride by yourself!


*/

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int age = scanner.nextInt(); // Don't change this line
        int height = scanner.nextInt(); // Don't change this line
        boolean hasAdult = scanner.nextBoolean(); // Don't change this line

        // Write your code below
        if (age < 12) {
            System.out.println("Sorry, you're too young");
        } else if (height <= 150) {
            System.out.println("Sorry, you're not tall enough");
        } else {
            // Se chegou aqui, tem 12+ anos e altura > 150cm
            if (age < 15) {
                if (hasAdult) {
                    System.out.println("You can ride with adult supervision!");
                } else {
                    System.out.println("Sorry, you need an adult with you");
                }
            } else {
                System.out.println("You can ride by yourself!");
            }
        }

        scanner.close();
    }
}