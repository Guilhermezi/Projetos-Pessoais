// A palavra-chave const cria variáveis com valores fixos. Ao usar const, os valores devem ser conhecidos ao escrever seu código.
void main() {
  const String language = 'Dart';
  print(language);
}

// Inferência de tipo funciona com const:
void main() {
  const language = 'Dart';      // String
  const version = 2;            // int
  const isStable = true;        // bool
  const rating = 4.9;           // double
  
  print(language);  // Outputs: Dart
  print(version);   // Outputs: 2
  print(isStable);  // Outputs: true
  print(rating);    // Outputs: 4.9
}

/*Desafio
Crie um programa em Dart que usa variáveis constantes para armazenar informações sobre um planeta fictício:

Declare uma variável const do tipo String chamada planetName com o valor "Mars"
Declare uma variável const do tipo int chamada numberOfMoons com o valor 2
Declare uma variável const do tipo double chamada distanceFromSun com o valor 227.9 (em milhões de km)
Declare uma variável const do tipo bool chamada hasRings com o valor false
Imprima cada variável com um rótulo descritivo exatamente como mostrado na saída esperada abaixo:
Planet Name: Mars
Number of Moons: 2
Distance from Sun: 227.9 million km
Has Rings: false
Sua saída deve corresponder exatamente a este formato.*/
void main() {
  // Declare your const variables here
  const String planetName = "Mars";
  const int numberOfMoons = 2;
  const double distanceFromSun = 227.9;
  const bool hasRings = false;
  
  // Print the variables with labels
  print("Planet Name: $planetName");
  print("Number of Moons: $numberOfMoons");
  print("Distance from Sun: $distanceFromSun million km");
  print("Has Rings: $hasRings");
}