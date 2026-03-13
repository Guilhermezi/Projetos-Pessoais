/*
A Lei de De Morgan é uma regra que nos ajuda a simplificar expressões com NÃO nelas. Ao trabalhar com expressões lógicas, às vezes precisamos simplificá-las ou rearranjá-las.

Se você tem não na frente de duas condições unidas por e, você pode dividi-lo em duas partes separadas. O e se torna ou, e cada parte ganha seu próprio não:

!(A && B) é o mesmo que (!A) || (!B)

Por exemplo:

// Vamos verificar se um número NÃO está (entre 1 e 10)
int number = 15;

// Essas duas expressões são equivalentes:
boolean result1 = !(number >= 1 && number <= 10);
boolean result2 = !(number >= 1) || !(number <= 10);

System.out.println(result1);  // true
System.out.println(result2);  // true
O oposto também é correto: !(A || B) é o mesmo que (!A) && (!B)

Por exemplo:

// Verificando se uma pessoa NÃO é (estudante ou empregada)
boolean isStudent = false;
boolean isEmployed = false;

// Essas duas expressões são equivalentes:
boolean result1 = !(isStudent || isEmployed);
boolean result2 = !(isStudent) && !(isEmployed);

System.out.println(result1);  // true
System.out.println(result2);  // true

Desafio

Iniciante
Você está ajudando uma loja de animais a criar um sistema para determinar se eles podem vender um animal a um cliente.

Inicialize as seguintes variáveis:

hasLicense com o valor true
hasSpace com o valor false
hasExperience com o valor true
Escreva as seguintes expressões lógicas para determinar se:

canSellRegularPet: O cliente precisa OU de licença OU de experiência, E deve ter espaço
canSellExoticPet: O cliente precisa de licença E experiência, E deve ter espaço
cannotSellAnyPet: O cliente não tem licença E não tem experiência, OU não tem espaço
result: canSellRegularPet OU canSellExoticPet OU cannotSellAnyPet
Dica: Use os valores das variáveis diretamente em suas expressões. Por exemplo, hasSpace é false, então "deve ter espaço" significa que você usa hasSpace como está (sem !) — a variável já contém o valor real. Use ! apenas quando a condição requer o oposto do que a variável contém, como "não tem licença" → !hasLicense.
 */

public class Main {
    public static void main(String[] args) {
        // Initialize variables
        boolean hasLicense = true;
        boolean hasSpace = false;
        boolean hasExperience = true;

        // Calculate conditions
        // Precisa de (licença OU experiência) E espaço
        boolean canSellRegularPet = (hasLicense || hasExperience) && hasSpace;

        // Precisa de licença E experiência E espaço
        boolean canSellExoticPet = hasLicense && hasExperience && hasSpace;

        // (Não tem licença E não tem experiência) OU não tem espaço
        boolean cannotSellAnyPet = (!hasLicense && !hasExperience) || !hasSpace;

        // União de todas as condições
        boolean result = canSellRegularPet || canSellExoticPet || cannotSellAnyPet;

        // Don't delete the lines below
        System.out.println("Can sell regular pet: " + canSellRegularPet);
        System.out.println("Can sell exotic pet: " + canSellExoticPet);
        System.out.println("Cannot sell any pet: " + cannotSellAnyPet);
        System.out.println("Result: " + result);
    }
}
