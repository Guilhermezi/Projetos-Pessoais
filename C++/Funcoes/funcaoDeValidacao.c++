/*
Desafio

Fácil
Escreva uma função chamada is_valid que recebe dois argumentos do tipo string, username e password.

A função deve retornar true se o username e o password forem válidos no sistema, caso contrário false.

Nosso sistema contém apenas dois nomes de usuário válidos - "admin" e "user".

A senha válida para o nome de usuário "user" é "qwerty".

Para o nome de usuário "admin" qualquer senha é válida!

*/
#include <iostream>
#include <string>

bool is_valid(std::string username, std::string password) {
    // Verifica se o usuário é "admin" (qualquer senha serve)
    if (username == "admin") {
        return true;
    } 
    // Verifica se o usuário é "user" E a senha é "qwerty"
    else if (username == "user" && password == "qwerty") {
        return true;
    } 
    // Se não for nenhum dos dois casos acima, é inválido
    else {
        return false;
    }
}

int main() {
    std::string user, pass;
    // Lê o usuário e a senha da entrada
    std::cin >> user;
    std::cin >> pass;
    
    bool res = is_valid(user, pass);
    
    // Imprime "true" ou "false" baseado no booleano
    std::cout << (res ? "true" : "false");
    
    return 0;
}
