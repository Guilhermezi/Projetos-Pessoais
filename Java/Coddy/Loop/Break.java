/*
A instrução break interrompe o loop imediatamente quando é encontrada.

Por exemplo,

for (int i = 0; i < 10; i++) { 
    if (i == 6) {
        break;
    }
    System.out.println(i);
}
No exemplo a seguir, o laço itera regularmente até atingir o número 6. Então, o programa entra na instrução if e executa a instrução break. Isso sai do laço imediatamente. A saída é:

0
1
2
3
4
5
challenge icon
Desafio

Iniciante
Você recebe um código que imprime os números de 1 a 20 (inclusive).

Sua tarefa é adicionar as instruções if e break para que apenas os números de 1 a 15 sejam impressos, o loop sairá antes de imprimir os números de 16 a 20.
*/
public class Main {
    public static void main(String[] args) {
        for (int i = 1; i <= 20; i++) {
            System.out.println(i);
            
            if (i == 15) {
                break;
            }
        }
    }
}
