/*
Desafio

Iniciante
Escreva um programa que obtém uma entrada String do usuário.

O programa deve imprimir "T" se a entrada for igual a "1" e "F" caso contrário.

Dica: No Java, use .equals() para comparar Strings em vez de ==, pois == verifica a igualdade de referência e pode não funcionar corretamente para comparação de Strings.

*/
import java.util.Scanner;

public class RecapIFElse {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        // Write your code below

        String user = scanner.nextLine();

        if (user.equals("1")){
            System.out.println("T");
        }else{
            System.out.println("F");
        }
        
        scanner.close();
    }
}