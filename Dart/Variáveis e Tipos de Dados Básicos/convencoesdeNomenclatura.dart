// Em Dart, convenções de nomenclatura tornam o código legível e consistente:

//1. Use camelCase para variáveis
void main() {
  String firstName = 'John';
  int userAge = 25;
  double accountBalance = 100.50;
  bool isLoggedIn = true;
}

//2. Comece com letras/sublinhados
void main() {
  var name = 'Dart';
  var counter = 1;
}

//3. Use nomes significativos
void main() {
  // Melhor nomenclatura
  var temperatureFahrenheit = 75.5;
}

//4. Use lowerCamelCase para constantes
void main() {
  const pi = 3.14159;
  const maxUsers = 100;
  const baseUrl = 'https://api.example.com';
  const defaultTimeout = Duration(seconds: 30);
}

/*Desafio
Neste desafio, você praticará as convenções de nomenclatura do Dart corrigindo variáveis com nomes ruins em um programa:

Renomeie a variável x para um nome descritivo para a idade de uma pessoa (use camelCase)
Renomeie a variável Y para um nome descritivo para a altura de uma pessoa em metros (use camelCase)
Renomeie a constante ABC para um nome descritivo para pi (use uppercase com underscores para constantes)
Renomeie a variável final temp123 para um nome descritivo para temperatura máxima permitida (use camelCase)
Após renomear, imprima cada variável com um rótulo descritivo exatamente como mostrado abaixo:

Age: 25
Height: 1.75
Pi Value: 3.14
Max Temperature: 100.0
Sua saída deve corresponder exatamente a este formato.*/

void main() {
  int age = 25;
  double height = 1.75;
  const double PI_VALUE = 3.14;
  final double maxTemperature = 100.0;
  
  // Print the variables with labels
  print("Age: $age");
  print("Height: $height");
  print("Pi Value: $PI_VALUE");
  print("Max Temperature: $maxTemperature");
}
