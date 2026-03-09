/*
Os operadores de teste de tipo do Dart verificam os tipos de variáveis em tempo de execução: is verifica se uma variável corresponde a um tipo, enquanto is! verifica se não corresponde.

void main() {
  var number = 42;
  var isInteger = number is int;
  
  print('Is $number an integer? $isInteger');
}
void main() {
  var price = 9.99;
  var isNotInteger = price is! int;
  
  print('Is $price not an integer? $isNotInteger');
}
void main() {
  var value1 = 'Hello';
  var value2 = 42;
  var value3 = true;
  
  print('$value1 is a String: ${value1 is String}');
  print('$value2 is a double: ${value2 is double}');
  print('$value3 is a bool: ${value3 is bool}');
}

Desafio

Fácil
Crie um programa em Dart que usa os operadores de teste de tipo (is e is!) para verificar os tipos de variáveis:

Crie uma variável number com o valor 42 usando inferência de tipo (var)
Crie uma variável decimal com o valor 3.14 usando inferência de tipo
Crie uma variável text com o valor "Hello" usando inferência de tipo
Crie uma variável active com o valor true usando inferência de tipo
Use o operador is para verificar se cada variável é do seu tipo correto (int, double, String, bool)
Use o operador is! para verificar se cada variável NÃO é de um tipo incorreto
Imprima os resultados com o formato exato mostrado na saída esperada
Sua saída deve corresponder exatamente a este formato:

number is int: true
number is! String: true
decimal is double: true
decimal is! int: true
text is String: true
text is! bool: true
active is bool: true
active is! double: true
*/
void main() {
  // Create variables using type inference
  var number = 42;
  var decimal = 3.14;
  var text = "Hello";
  var active = true;
  
  // Check types with 'is' operator and print results
  print("number is int: ${number is int}");
  print("number is! String: ${number is! String}");
  
  print("decimal is double: ${decimal is double}");
  print("decimal is! int: ${decimal is! int}");
  
  print("text is String: ${text is String}");
  print("text is! bool: ${text is! bool}");
  
  print("active is bool: ${active is bool}");
  print("active is! double: ${active is! double}");
}
