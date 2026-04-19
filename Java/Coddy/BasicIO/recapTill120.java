/*
Desafio

Iniciante
Escreva um programa que obtenha a idade do usuário como entrada.

O programa deve imprimir o número de anos faltantes years till 120 (em um formato específico, mostrado abaixo).

Por exemplo, para a entrada 25, a saída esperada é "95 years till 120".

Certifique-se de não imprimir nada mais!



*/
import java.util.Scanner;

public class recapTill120 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        
        int age = scanner.nextInt();

        int falta = 120 - age;
        
        // Imprime apenas o resultado esperado
        System.out.println(falta + " years till 120");
        
        scanner.close();
    }
}
