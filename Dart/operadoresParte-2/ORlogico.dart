// O operador OR lógico (||) retorna true quando pelo menos uma expressão é true, e false apenas quando ambas são false.

void main() {
  bool hasCreditCard = false;
  bool hasDebitCard = true;
  
  bool canPayOnline = hasCreditCard || hasDebitCard;
  
  print('Can this person pay online? $canPayOnline');
}
// Saída: Can this person pay online? true

void main() {
  int age = 16;
  bool hasParentalConsent = true;
  
  bool canWatchMovie = (age >= 18) || (age >= 13 && hasParentalConsent);
  
  print('Can watch the movie? $canWatchMovie');
}
/*
Desafio

Iniciante
Crie um verificador de elegibilidade para jogos usando o operador OU lógico (||):

Declare uma variável inteira age com valor 15
Declare uma variável booleana hasParentalConsent com valor true
Declare uma variável booleana canPlayGame que verifica se pelo menos uma das seguintes condições é verdadeira:
A pessoa tem 18 anos ou mais (age >= 18), OU
A pessoa tem consentimento parental (hasParentalConsent é true)
Imprima o resultado com este formato exato:
Age: 15
Has parental consent: true
Can play game: true
Em seguida, altere hasParentalConsent para false e imprima o resultado atualizado com o mesmo formato.
*/
void main() {
  // Declare your variables here
  int age = 15;
  bool hasParentalConsent = true;
  
  // Check if the person can play the game
  bool canPlayGame = age >= 18 || hasParentalConsent;
  
  // Print the initial results
  print("Age: $age");
  print("Has parental consent: $hasParentalConsent");
  print("Can play game: $canPlayGame");
  
  // Change parental consent status
  hasParentalConsent = false;
  canPlayGame = age >= 18 || hasParentalConsent;
  
  // Print the updated results
  print("\nAge: $age");
  print("Has parental consent: $hasParentalConsent");
  print("Can play game: $canPlayGame");
}