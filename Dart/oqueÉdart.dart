//O Código está com variaveis em inglês para base de aprendizado da lingua, e tbm pq o app que estou usando para aprender Dart está em inglês.

// Dart é uma linguagem desenvolvida pelo Google que impulsiona o Flutter para desenvolvimento de aplicativos multiplataforma. Ela combina orientação a objetos, tipagem flexível e recursos modernos como segurança nula.

// Um programa simples em Dart:

void main() {
    print('Hello Dart!');
}

// Dart é amigável para iniciantes, mas poderoso o suficiente para desenvolvimento profissional em plataformas web, móvel e desktop. test2

// A função main() é o ponto de entrada do programa, e print() exibe texto no console.
// Todo programa Dart requer uma função main como seu ponto de entrada onde a execução começa.
/* Aqui, void significa sem valor de retorno, main é o nome da função que o Dart procura na inicialização, () pode conter entradas, e {} contém o código a ser executado.*/

// O que são Variáveis?

// Variáveis armazenam dados no seu programa. Crie-as especificando tipo, nome e valor:
void main() {
  String name = 'Dart Programmer';
  print(name);
}

// Variáveis podem ser referenciadas e modificadas em todo o seu código:

void main() {
  String language = 'Dart';
  print('I am learning ' + language);
  
  language = 'Dart programming';
  print('I am learning ' + language);
}

// Strings

// Strings em Dart representam dados de texto, delimitados por aspas simples ou duplas.

void main() {
  String greeting = 'Hello, Dart!';
  print(greeting);
}

// Ambos os tipos de aspas funcionam:

void main() {
  String withSingleQuotes = 'Learning Dart';
  String withDoubleQuotes = "Programming is fun";
  
  print(withSingleQuotes);
  print(withDoubleQuotes);
}

// Concatene strings com +:

void main() {
  String firstName = 'Dart';
  String lastName = 'Developer';
  
  // Combine strings
  String fullName = firstName + ' ' + lastName;
  print(fullName);
}

