/*
Desafio

Fácil
Você está criando um sistema de perfil simples. Crie várias variáveis String para armazenar diferentes peças de informação:

Crie as seguintes variáveis String:
firstName com valor "Alex"
city com valor "New York"
hobby com valor "Playing guitar"
greeting com valor "Hello, nice to meet you!"
favoriteQuote com valor "Life is like a box of chocolates"
mood com valor "Happy"
Preste atenção a:
Espaçamento exato
Uso correto de aspas
Sensibilidade a maiúsculas e minúsculas
Caracteres especiais e emojis
O programa imprimirá automaticamente todos os valores em um formato de perfil.
*/
public class Main {
    public static void main(String[] args) {
        // Create your String variables below
        String firstName = "Alex";
        String city = "New York";
        String hobby = "Playing guitar";
        String greeting = "Hello, nice to meet you!";
        String favoriteQuote = "Life is like a box of chocolates";
        String mood = "Happy";
        
        // Don't modify the code below
        System.out.println("Name: " + firstName);
        System.out.println("City: " + city);
        System.out.println("Hobby: " + hobby);
        System.out.println("Greeting: " + greeting);
        System.out.println("Favorite Quote: " + favoriteQuote);
        System.out.println("Current Mood: " + mood);
    }
}