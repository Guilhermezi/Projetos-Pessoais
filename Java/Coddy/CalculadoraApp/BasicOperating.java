/*
Desafio

Iniciante
Adicione as operações aritméticas básicas (adição, subtração, multiplicação e divisão) em num1 e num2. Armazene os resultados em variáveis nomeadas sum, difference, product e quotient, respectivamente. Imprima os resultados no console usando System.out.println no seguinte formato:

Sum: [sum]
Difference: [difference]
Product: [product]
Quotient: [quotient]
*/
import java.util.Scanner;

public class BasicOperating {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        // Leitura dos dados
        double num1 = sc.nextDouble();
        double num2 = sc.nextDouble();

        // Saída conforme o esperado
        System.out.println("Calculator App");
        System.out.println("Sum: " + (num1 + num2));
        System.out.println("Difference: " + (num1 - num2));
        System.out.println("Product: " + (num1 * num2));
        System.out.println("Quotient: " + (num1 / num2));

        sc.close();
    }
}
