// Números

//Variáveis são contêineres que armazenam valores de dados. Elas são usadas para armazenar, manipular e exibir informações dentro de um programa.

// Em resumo, uma variável é como uma unidade de memória que podemos acessar digitando o nome da variável. 

// Cada variável tem um nome único e um valor que pode ser de diferentes tipos. Java possui vários tipos de dados incorporados que definem o tipo de valor que uma variável pode armazenar.

// Para inicializar uma variável, usamos o seguinte formato:

variable_type variable_name = value;

// Em Java, os números são tipicamente representados usando dois principais tipos de dados: int e double.

// int é usado para armazenar números inteiros sem qualquer ponto decimal. Por exemplo:
int age = 30;
int temperature = -5;
int count = 100;

// double é usado para armazenar números com um ponto decimal. Por exemplo:
double price = 99.99;
double pi = 3.14159;
double fraction = 0.5;

// Ao declarar variáveis em Java, você precisa especificar o tipo da variável antes do nome da variável. Isso é conhecido como declaração de tipo. Uma vez que uma variável é declarada com um certo tipo, ela só pode armazenar valores desse tipo.

public class Main {
    public static void main(String[] args) {
        // Declare and initialize variables here
        int quantity = 5;
        double itemPrice = 24.99;
        
        
        // Output the values
        System.out.println("Quantity: " + quantity);
        System.out.println("Price: " + itemPrice);
        
    }
}

// String

// Um char é um único caractere (Por exemplo: 1, 6, %, b, p, ., T, etc.)

// O tipo String é um tipo especial que consiste em múltiplos chars.

// Para inicializar um valor de string em uma variável, envolva-o em aspas duplas:

String s1 = "This is a string";

// No exemplo acima, uma variável de string chamada s1 é inicializada.

public class Main {
    public static void main(String[] args) {
        // Type your code below
        String coddy = "I am learning to code with Coddy!";
        
        // Don't change the line below
        System.out.println("coddy = \"" + coddy + "\"");
    }
}

// Booleano

// Um tipo boolean tem apenas 2 valores possíveis: true ou false.

// Para atribuir um valor booleano a uma variável, use a palavra-chave boolean seguida pelo nome da variável:

boolean variable_true = true;
boolean variable_false = false;

// No exemplo acima, duas variáveis booleanas chamadas variable_true e variable_false são inicializadas com os valores true e false, respectivamente.

public class Main {
    public static void main(String[] args) {
        // Type your code below
        boolean isLoggedIn = true;
        
        // Don't change the line below
        System.out.println("isLoggedIn = " + isLoggedIn);
    }
}

// char

// Um char é um único caractere (Por exemplo: 1, 6, %, b, p, ., T, etc.)

// O tipo char é um tipo especial que consiste em um único caractere.

// Para inicializar um valor char em uma variável, envolva-o dentro de aspas simples:

char c1 = 'h';

// No exemplo acima, uma variável char chamada c1 é inicializada.

public class Main {
    public static void main(String[] args) {
        // Type your code below
        char initial = 'C';
        
        // Don't change the line below
        System.out.println("initial = '" + initial + "'");
    }
}

// Declaração de Tipo

// Uma vez que uma variável é declarada com um certo tipo, ela só pode conter valores desse tipo. Por exemplo, uma variável int só pode conter valores inteiros, e uma variável String só pode conter texto.

// Por exemplo:

int age = 25;        // Só pode conter números inteiros
String str = "abc";  // Só pode conter texto

// Isso causaria erros:

age = "defg";  // Erro: não é possível colocar texto em uma variável int
str = 25;      // Erro: não é possível colocar um número em uma variável String

// Estes são válidos:


age = 26;      // OK: atribuindo um novo inteiro
str = "Jane";  // OK: atribuindo uma nova string de texto


public class Main {
    public static void main(String[] args) {
        // Declare variables here
        int count = 10;
        double total = 150.75;
        char grade = 'A';
        boolean isActive = false;
        String userName = "Bob123";
        
        // Output the values
        System.out.println("Count: " + count);
        System.out.println("Total: " + total);
        System.out.println("Grade: " + grade);
        System.out.println("Active: " + isActive);
        System.out.println("User Name: " + userName);
        
    }
}

public class Main {
    public static void main(String[] args) {
        // Create integer variables
        int temperature = 28;
        int humidity = 65;
        int windSpeed = 15;
        
        // Create decimal variables
        double morningTemp = 22.5;
        double afternoonTemp = 28.8;
        double eveningTemp = 23.4;
        
        // Don't modify the code below
        System.out.println("Current Temperature: " + temperature);
        System.out.println("Humidity Level: " + humidity);
        System.out.println("Wind Speed: " + windSpeed);
        System.out.println("Morning Temperature: " + morningTemp);
        System.out.println("Afternoon Temperature: " + afternoonTemp);
        System.out.println("Evening Temperature: " + eveningTemp);
    }
}