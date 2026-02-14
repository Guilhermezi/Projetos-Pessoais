// O operador lógico AND (&&) retorna true apenas quando ambas as expressões são true, caso contrário false.
void main() {
  bool isAdult = true;
  bool hasLicense = true;
  
  bool canDrive = isAdult && hasLicense;
  
  print('Can this person drive? $canDrive');
}
void main() {
  int age = 25;
  double savings = 5000.0;
  
  bool isEligibleForLoan = (age >= 18) && (savings >= 1000.0);
  
  print('Is eligible for loan? $isEligibleForLoan');
}

/*Desafio

Fácil
Crie um verificador de elegibilidade para jogos usando o operador lógico AND (&&):

Declare uma variável inteira age com um valor de 15
Declare uma variável booleana hasParentalConsent com um valor de true
Declare uma variável booleana hasCompletedTutorial com um valor de false
Declare uma variável booleana canPlayGame que é true SOMENTE se:
O jogador tem 18 anos ou mais, OU
O jogador tem pelo menos 13 anos AND possui consentimento parental
Declare uma variável booleana canAccessBonus que é true SOMENTE se:
O jogador canPlayGame AND completou o tutorial
Imprima os resultados no EXATO formato a seguir:
Player age: 15
Has parental consent: true
Completed tutorial: false
Can play game: true
Can access bonus content: false
Sua saída deve corresponder exatamente a este formato.

*/

void main() {
  // Declare your variables here
  int age = 15;
  bool hasParentalConsent = true;
  bool hasCompletedTutorial = false;
  
  // Check if player can play the game
  bool canPlayGame = age >= 18 || (age >= 13 && hasParentalConsent);
  
  // Check if player can access bonus content
  bool canAccessBonus = canPlayGame && hasCompletedTutorial;
  
  // Print the results
  print("Player age: $age");
  print("Has parental consent: $hasParentalConsent");
  print("Completed tutorial: $hasCompletedTutorial");
  print("Can play game: $canPlayGame");
  print("Can access bonus content: $canAccessBonus");
}