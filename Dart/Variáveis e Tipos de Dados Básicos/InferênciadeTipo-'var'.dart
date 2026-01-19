// Em Dart, var habilita a inferência de tipo, onde o Dart determina automaticamente os tipos de variáveis a partir dos valores atribuídos.
void main() {
  var name = 'Dart Programmer';
  print(name);
}

//  Dart infere name como String. Funciona com outros tipos também:
void main() {
  var age = 25;              // Inferido como int
  var price = 19.99;         // Inferido como double
  var isAvailable = true;    // Inferido como bool
  
  print(age);          // Saída: 25
  print(price);        // Saída: 19.99
  print(isAvailable);  // Saída: true
}

/*Desafio
Crie um programa em Dart que demonstre inferência de tipo com a palavra-chave var:

Declare uma variável chamada name usando var e atribua a ela o valor de string "Dart"
Declare uma variável chamada year usando var e atribua a ela o valor inteiro 2011
Declare uma variável chamada version usando var e atribua a ela o valor double 2.19
Declare uma variável chamada isStronglyTyped usando var e atribua a ela o valor booleano true
Imprima cada variável com um rótulo descritivo no seguinte formato:
Language: Dart
Created in: 2011
Current version: 2.19
Is strongly typed: true
Sua saída deve corresponder exatamente a este formato.*/

void main() {
  // Declare your variables using var
  var name = "Dart";
  var year = 2011;
  var version = 2.19;
  var isStronglyTyped = true;
  
  // Print the variables with labels
  print("Language: " + name);
  print("Created in: " + year.toString());
  print("Current version: " + version.toString());
  print("Is strongly typed: " + isStronglyTyped.toString());
}