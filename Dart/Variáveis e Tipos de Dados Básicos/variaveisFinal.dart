// Em Dart, variáveis final não podem ser alteradas após a inicialização. Elas criam constantes no seu programa.
void main() {
  final name = 'Dart Programmer';
  print(name);
}

//Você pode especificar tipos ou deixar o Dart inferi-los. Tentar reatribuir variáveis final causa erros:
void main() {
  final score = 100;
  // score = 200;  // Erro: Não é possível reatribuir variáveis final
}

/*Desafio
Neste desafio, você aprenderá sobre variáveis final em Dart. Uma variável final só pode ser definida uma vez e não pode ser alterada após a inicialização.

Complete as seguintes tarefas:

Crie uma variável inteira final chamada releaseYear com o valor 2011 (o ano em que o Dart foi lançado pela primeira vez)
Crie uma variável string final chamada creator com o valor "Google"
Crie uma variável booleana final chamada isCompiledLanguage com o valor true
Imprima todas as três variáveis com rótulos descritivos exatamente como mostrado na saída esperada
Sua saída deve ser exatamente assim:

Dart was released in: 2011
Dart was created by: Google
Is Dart a compiled language? true*/

void main() {
  // Declare your final variables here
  final int releaseYear = 2011;
  final String creator = "Google";
  final bool isCompiledLanguage = true;
  
  // Print the variables with labels
  print("Dart was released in: " + releaseYear.toString());
  print("Dart was created by: " + creator);
  print("Is Dart a compiled language? " + isCompiledLanguage.toString());
}