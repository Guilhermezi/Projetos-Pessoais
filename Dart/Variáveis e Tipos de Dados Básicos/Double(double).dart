// Doubles (double type) são números com pontos decimais para valores precisos.
void main() {
  double price = 19.99;
  print(price);
}
// Doubles podem ser usados em cálculos:
void main() {
  double temperature = 72.5;
  print(temperature);
  
  // Aumente a temperatura
  temperature = 75.8;
  print(temperature);
  
  // Crie outro double
  double increase = 2.5;
  
  // Combine doubles
  double newTemperature = temperature + increase;
  print(newTemperature);
}

/*Desafio
Crie um programa que funcione com valores double (números decimais) em Dart:

Declare uma variável double chamada temperature com um valor de 98.6
Declare uma variável double chamada weight com um valor de 7.5
Imprima ambas as variáveis com rótulos descritivos
Sua saída deve corresponder exatamente ao formato esperado:
Temperature: temperature 

Weight: weight */
void main() {
  // Declare your double variables here
  double temperature = 98.6;
  double weight = 7.5;
  
  // Print the variables with labels
  print("Temperature: " + temperature.toString());
  print("Weight: " + weight.toString());
}
