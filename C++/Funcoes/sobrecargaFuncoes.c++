/*
Sobrecarga de funções é um recurso em C++ onde duas ou mais funções podem ter o mesmo nome, mas parâmetros diferentes. Quando você chama uma função sobrecarregada, o compilador C++ determina a definição mais apropriada a ser usada comparando os tipos de argumentos que você usou na chamada com os tipos de parâmetros especificados nas definições. Se nenhuma função correspondente for encontrada, o compilador gerará um erro.

Aqui está um exemplo de sobrecarga de funções:

int add(int a, int b) {
    return a + b;
}
double add(double a, double b) {
    return a + b;
}
int main() {
    int sum1 = add(5, 3); // Calls the first version of add
    double sum2 = add(2.5, 3.7); // Calls the second version of add
    return 0;
}
Neste exemplo, temos duas funções chamadas add. Uma recebe dois parâmetros int, e a outra recebe dois parâmetros double. Dependendo dos tipos dos argumentos que passamos para add, a versão apropriada da função é chamada.

É importante notar que o tipo de retorno sozinho não é suficiente para sobrecarregar uma função. As funções devem diferir em suas listas de parâmetros.


*/