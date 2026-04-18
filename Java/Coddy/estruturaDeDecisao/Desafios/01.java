/*
Desafio

Fácil
Crie a lógica para determinar o tipo de ingresso e o preço.

Estas variáveis já estão definidas:
age (idade do cliente)
time (horário da sessão no formato de 24 horas, ex.: 1430 para 14:30)
isHoliday (booleano indicando se é feriado)
Defina as variáveis ticketType e price com base nestas condições:
Para crianças (idade < 13):
"CHILD" ingresso
Preço base $8
Adicione $2 se for feriado
Para adolescentes (idade 13-17):
"TEEN" ingresso
Preço base $12
Adicione $3 se for feriado
Para adultos (idade 18-59):
"ADULT" ingresso
Preço base $15
Adicione $5 se for feriado
Subtraia $3 se o horário da sessão for antes de 1700 (17h)
Para idosos (idade 60 ou mais):
"SENIOR" ingresso
Preço base $10
Sem acréscimo de feriado
Subtraia $2 se o horário da sessão for antes de 1700 (17h)
*/
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int age = scanner.nextInt();
        int time = scanner.nextInt();       // 24-hour format
        boolean isHoliday = scanner.nextBoolean();

        // Your code to determine ticket type and price
        String ticketType = "";
        int price = 0;

        // Check age ranges: CHILD (under 13), TEEN (13-17), ADULT (18-59), SENIOR (60+)
        // For ADULT: add $5 on holidays; subtract $3 for matinee (time < 1700)
        // For TEEN: add $3 on holidays
        // For CHILD: add $2 on holidays
        // For SENIOR: subtract $2 for matinee (time < 1700)
        // Determine Ticket Type and Base Price
        if (age < 13) {
            ticketType = "CHILD";
            price = 8; 
            if (isHoliday) price += 2;
        } else if (age >= 13 && age <= 17) {
            ticketType = "TEEN";
            price = 12;
            if (isHoliday) price += 3;
        } else if (age >= 18 && age <= 59) {
            ticketType = "ADULT";
            price = 15; // Preço base correto para ADULT
            if (isHoliday) price += 5;
            if (time < 1700) price -= 3;
        } else {
            ticketType = "SENIOR";
            price = 10;
            if (time < 1700) price -= 2;
        }

        // Don't modify the code below
        System.out.println("Customer Age: " + age);
        System.out.println("Show Time: " + time);
        System.out.println("Holiday? " + isHoliday);
        System.out.println("-------------------");
        System.out.println("Ticket Type: " + ticketType);
        System.out.println("Final Price: $" + price);
    }
}