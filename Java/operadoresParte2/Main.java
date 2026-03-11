/*
Ao verificar múltiplas condições, o computador para de verificar assim que sabe a resposta final (Isso é chamado de avaliação de curto-circuito).

Por exemplo:

int x = 0;
int y = 5;
boolean result = x != 0 && y / x > 2;
Aqui x é igual a 0, portanto não avaliará y / x > 2. Se invertêssemos a ordem:

boolean result = y / x > 2 && x != 0;
Isso resultará em um erro porque y será dividido por 0, o que é ilegal em matemática.

Essa técnica é usada para otimizar a avaliação de expressões lógicas. Por exemplo:

int a = 0;
int b = 2;
int c = 3;
int d = 5;
boolean result = (a > 0 && b < 2) || (c < -5 && d < 10);
Neste exemplo, b < 2 e d < 10 não serão avaliados porque a > 0 e c < -5 são ambos falsos.


Desafio

Iniciante
Vamos criar um programa para decidir se é um bom dia para produção de energia de painéis solares

Inicialize estas variáveis:

isSunny com o valor true
windSpeed com o valor 5.4
temperature com o valor 23
solarPanelOutput com o valor 9
isCloudy com o valor false
Crie uma expressão lógica que verifica TODAS estas condições:

Está ensolarado
A velocidade do vento é menor que 10
A produção do painel solar é menor que 15
A temperatura está acima de 20 OU não há nuvens
*/
public class Main {
    public static void main(String[] args) {
        // 1. Inicialização das variáveis
        boolean isSunny = true;
        double windSpeed = 5.4;
        int temperature = 23;
        int solarPanelOutput = 9;
        boolean isCloudy = false;
        
        // 2. Expressão lógica completa
        // Condições: Ensolarado AND Vento < 10 AND Produção < 15 AND (Temp > 20 OR SEM nuvens)
        boolean result = isSunny && (windSpeed < 10) && (solarPanelOutput < 15) && (temperature > 20 || !isCloudy);
        
        // Don't delete the lines below
        System.out.println("Checking conditions for solar energy production...");
        System.out.println("1. Is it sunny? " + isSunny);
        System.out.println("2. Is wind speed safe? " + (windSpeed < 10));
        System.out.println("3. Can panels produce more? " + (solarPanelOutput < 15));
        System.out.println("4. Is temperature good OR no clouds? " + (temperature > 20 || !isCloudy));
        System.out.println("\nFinal result - Good day for solar energy production: " + result);
    }
}
