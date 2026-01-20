/*Segurança de nulos ajuda a prevenir travamentos inesperados do app controlando quais variáveis podem estar vazias (null).

Por padrão, as variáveis devem conter um valor:*/
void main() {
  String name = 'Dart';
  print(name);  // Outputs: Dart
  
  // This would cause problems:
  // name = null;  // Not allowed
}

//Adicione ? após o tipo para permitir valores nulos:
void main() {
  String? name = 'Dart';
  print(name);  // Outputs: Dart
  
  // Now we can assign null
  name = null;
  print(name);  // Outputs: null
}

//Você pode declarar variáveis anuláveis de qualquer tipo:
void main() {
  int? age;  // No initial value, defaults to null
  double? price = 19.99;
  bool? isAvailable = true;
  
  print(age);         // Outputs: null
  print(price);       // Outputs: 19.99
  print(isAvailable); // Outputs: true
  
  // We can change any of these to null
  price = null;
  isAvailable = null;
}

//A segurança de nulos ajuda a proteger seu app de travamentos inesperados que ocorrem quando seu código tenta usar valores nulos em operações. Por exemplo, tentar acessar um método em uma variável nula causará um erro em tempo de execução. Com a segurança de nulos, o compilador Dart detecta esses problemas em tempo de compilação, permitindo que você os corrija antes que o código seja executado.

/*Desafio
Crie um programa em Dart que demonstre a segurança básica de nulos usando o operador ?:

Declare uma variável String nomeada username e defina-a como null usando o operador de segurança de nulos ? (String?)
Declare uma variável int nomeada userAge e defina-a como null usando o operador de segurança de nulos
Imprima ambas as variáveis com rótulos no EXATO formato seguinte:
Username: null
User age: null
Em seguida:

Atribua o valor "DartLearner" à variável username
Atribua o valor 25 à variável userAge
Imprima ambas as variáveis novamente com o EXATO mesmo formato de antes
Sua saída deve corresponder exatamente ao formato mostrado acima.*/

void main() {
  // Declare your nullable variables here
  String? username = null;
  int? userAge = null;
  
  // Print the initial values with labels
  print("Username: " + username.toString());
  print("User age: " + userAge.toString());
  
  // Assign new values to the variables
  username = "DartLearner";
  userAge = 25;
  
  // Print the updated values with the same labels
  print("Username: " + username.toString());
  print("User age: " + userAge.toString());
}