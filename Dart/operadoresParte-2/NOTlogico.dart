// O operador lógico NOT (!) inverte valores booleanos, transformando true em false e vice-versa.
void main() {
  bool isRaining = true;
  bool isNotRaining = !isRaining;
  
  print('Is it raining? $isRaining');
  print('Is it not raining? $isNotRaining');
}
/*
Saída:
Is it raining? true
Is it not raining? false

É útil para verificar condições negativas e pode ser combinado com outros operadores lógicos.

Desafio

Fácil
Crie um programa que demonstra o operador LÓGICO NÃO (!) em Dart:

Declare uma variável booleana isRaining e defina-a como true
Declare uma variável booleana hasUmbrella e defina-a como false
Crie uma nova variável booleana willGetWet que seja true se estiver chovendo E a pessoa NÃO tiver um guarda-chuva (use o operador !)
Crie outra variável booleana canGoOutside que seja true se NÃO estiver chovendo OU a pessoa tiver um guarda-chuva (use o operador !)
Imprima todas as quatro variáveis no EXATO seguinte formato:
Is it raining? true
Do you have an umbrella? false
Will you get wet? true
Can you go outside? false
Sua saída deve corresponder exatamente a este formato.
*/

void main() {
  // Declare your boolean variables here
  bool isRaining = true;
  bool hasUmbrella = false;
  
  // Calculate willGetWet using logical NOT with AND
  bool willGetWet = isRaining && !hasUmbrella;
  
  // Calculate canGoOutside using logical NOT with OR
  bool canGoOutside = !isRaining && hasUmbrella;
  
  // Print the variables with labels
  print("Is it raining? $isRaining");
  print("Do you have an umbrella? $hasUmbrella");
  print("Will you get wet? $willGetWet");
  print("Can you go outside? $canGoOutside");
}
