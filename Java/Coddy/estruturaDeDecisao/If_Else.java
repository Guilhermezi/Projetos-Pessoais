/*
O if nos permite executar código particular se uma condição for atendida, mas e se quisermos executar algo diferente se a condição não for atendida?

Para isso, temos a declaração else:

int age = 15;
String status = "None";
if (age >= 18) {
    status = "Adult";
} else {
    status = "Young";
}
No exemplo acima, age é menor que 18, o que significa que entra no código else, e status conterá "Young".

Podemos até torná-lo mais profundo usando a declaração else if:

int age = 68;
String status = "None";
if (age < 18) {
    status = "Young";
} else if (age >= 18 && age <= 65) {
    status = "Adult";
} else {
    status = "Old";
}
Aqui, verifica se a idade é menor que 18, se não, continuará para a próxima condição e verificará se a idade está entre 18 e 65. Se essa condição também não for atendida, definirá status para "Old".

Podemos adicionar quantas declarações else if quisermos:

if (condition1) {
    code;
} else if (condition2) {
    code;
} else if (condition3) {
    code;
}
...

Desafio

Iniciante
Você recebe um código que obtém como entrada um número que indica a velocidade do vento e o armazena em uma variável chamada wind.

Nota: aprenderemos nas próximas lições como obter entrada do usuário, atualmente apenas não toque na primeira linha.

 

Sua tarefa é inicializar a variável status com base nas condições:

"Calm" se wind for menor que 8,
"Breeze" se wind estiver entre 8 e 31 (incluindo 8 e 31).
"Gale" se wind estiver entre 32 e 63 (incluindo 32 e 63)
"Storm" caso contrário
Verifique os casos de teste para ver todas as entradas e as saídas esperadas
*/
import java.util.Scanner;

public class If_Else {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int wind = scanner.nextInt(); // Don't change this line
        String status = "unset";
        // Type your code below
                // Digite seu código abaixo
        if (wind < 8) {
            status = "Calm";
        } else if (wind >= 8 && wind <= 31) {
            status = "Breeze";
        } else if (wind >= 32 && wind <= 63) {
            status = "Gale";
        } else {
            status = "Storm";
        }

        
        // Don't change the line below
        System.out.println("status = " + status);
        scanner.close(); // Closing the scanner after use
    }
}