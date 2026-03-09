/*
Resumo - Fazendo Comparações


Desafio

Fácil
Você está construindo um sistema para uma nave espacial que determina se os passageiros podem embarcar com base em vários critérios. Crie um programa que:

Declara as seguintes variáveis:
Uma variável int passengerAge com valor 25
Uma variável double ticketPrice com valor 149.99
Uma variável bool hasBoardingPass com valor true
Uma variável bool hasLuggage com valor false
Uma variável var passengerType com valor "Regular"
Crie uma variável booleana isAdult que verifica se passengerAge é maior ou igual a 18
Crie uma variável booleana isDiscounted que verifica se ticketPrice é menor que 150.0
Crie uma variável booleana canBoardNormally que é verdadeira apenas se:
O passageiro é adulto E tem um passe de embarque E o preço do bilhete não é igual a 0.0
Crie uma variável booleana needsAssistance que é verdadeira se:
O passageiro NÃO é adulto OU tem bagagem
Crie uma variável booleana isValidPassengerType que verifica se passengerType é do tipo String
Crie uma variável booleana isNotNumber que verifica se passengerType NÃO é do tipo int
Imprima todas as variáveis com rótulos apropriados conforme mostrado na saída esperada
Sua saída deve corresponder exatamente ao formato mostrado abaixo.

*/

void main() {
  // 1. Declare the passenger variables here
  int passengerAge = 25;
  double ticketPrice = 149.99;
  bool hasBoardingPass = true;
  bool hasLuggage = false;
  var passengerType = "Regular"; // Adicionado ponto e vírgula
  
  // 2. Check if passenger is an adult
  bool isAdult = passengerAge >= 18;
  
  // 3. Check if ticket is discounted
  bool isDiscounted = ticketPrice < 150.0;
  
  // 4. Check if passenger can board normally
  bool canBoardNormally = isAdult && hasBoardingPass && ticketPrice != 0.0;
  
  // 5. Check if passenger needs assistance
  // Alterado de && para || (OU) conforme o enunciado
  bool needsAssistance = !isAdult || hasLuggage;
  
  // 6. Check if passengerType is a String
  bool isValidPassengerType = passengerType is String;
  
  // 7. Check if passengerType is not an int
  bool isNotNumber = passengerType is! int;
  
  // 8. Print all variables with appropriate labels
  print("Passenger Information:");
  print("Age: $passengerAge");
  print("Ticket Price: $ticketPrice");
  print("Has Boarding Pass: $hasBoardingPass");
  print("Has Luggage: $hasLuggage");
  print("Passenger Type: $passengerType");
  
  print("\nBoarding Checks:");
  print("Is Adult: $isAdult");
  print("Has Discounted Ticket: $isDiscounted");
  print("Can Board Normally: $canBoardNormally");
  print("Needs Assistance: $needsAssistance");
  print("Valid Passenger Type: $isValidPassengerType");
  print("Passenger Type is Not a Number: $isNotNumber");
}
