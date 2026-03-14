/*
As strings se comportam um pouco diferente dos outros tipos. Existem várias maneiras de inserir entrada em uma string no C++. Aqui estão os métodos mais comuns:

1. Usando cin:

std::string str;
std::cin >> str;
Nota: Isso lê apenas até o primeiro espaço em branco

2. Usando getline() (recomendado para sentenças com espaços):

std::string str;
std::getline(std::cin, str);
Isso lê a linha inteira, incluindo espaços.

3. Usando tanto cin quanto getline (ao ler após cin):

int n;
std::string str;
std::cin >> n;
std::cin.ignore();  // Limpa a nova linha do buffer de entrada
std::getline(cin, str);
Sem cin.ignore(), o getline leria a nova linha restante em vez de esperar pela entrada
*/
