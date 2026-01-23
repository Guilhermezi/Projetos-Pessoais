/*Um char é um único caractere (Por exemplo: 1, 6, %, b, p, ., T, etc.)

O tipo string em C++ é uma sequência de caracteres que pode conter múltiplos chars.

Para usar strings em C++, você deve incluir isso no topo do seu código:*/
#include <string>

/*Nota: Embora seu código possa funcionar sem <strong>#include <string></strong> (porque outros cabeçalhos como <strong><iostream></strong> possam incluí-lo indiretamente), é considerado uma má prática depender de inclusões indiretas. Sempre inclua explicitamente os cabeçalhos que você usa diretamente no seu código.

Você também precisa lidar com o namespace de uma dessas duas maneiras:

1. Adicione esta linha após seus includes:*/
using namespace std;

// ficando assim:
#include <iostream>
#include <string>
using namespace std;

// 2. Não adicione a linha using namespace, mas prefixe string com std:::
std::string s1 = "This is a string";
// This works because we explicitly used std::

/*Observe que a variável string usa aspas duplas. No exemplo acima, uma variável string chamada s1 é inicializada.

Ambos os métodos requerem #include <string>. A única diferença é se você quer escrever 'std::' antes de 'string' ou não.

Aqui está um exemplo completo:*/
#include <string>
using namespace std;  // Method 1

int main() {
    string s1 = "Hello";  // Method 1 style
    std::string s2 = "Hello again";  // Method 2 style (still works even with 'using namespace')
    return 0;
}

/*
Desafio

Iniciante
Armazene a string I am learning to code with Coddy! em uma variável chamada coddy.
*/
#include <iostream>
#include <string>
using namespace std;

int main() {
    // Declare and initialize variables here
    std::string coddy = "I am learning to code with Coddy!";
    
    // Output the values
    std::cout << "Coddy = \"" << coddy << "\"" <<std::endl;

    return 0;
}