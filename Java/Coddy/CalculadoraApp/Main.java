/*
Desafio

Iniciante
Modifique a saída para que ela sempre imprima um valor double com duas casas decimais. Para fazer isso, use o formato %.2f dentro do método printf:

int num = 0;
System.out.printf("number: %.2f", num);
Adicione \n no final da string, isso adiciona uma nova linha:

System.out.printf("number: %.2f\n",

*/
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        // Leitura dos dados
        double num1 = sc.nextDouble();
        double num2 = sc.nextDouble();

        // Saída com formatação de duas casas decimais
        System.out.println("Calculator App");
        System.out.printf("Sum: %.2f\n", (num1 + num2));
        System.out.printf("Difference: %.2f\n", (num1 - num2));
        System.out.printf("Product: %.2f\n", (num1 * num2));
        System.out.printf("Quotient: %.2f\n", (num1 / num2));

        sc.close();
    }
}

