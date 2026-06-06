/*
Desafio

Fácil
Escreva uma função chamada isValid que recebe dois argumentos do tipo string, username e password.

A função retornará True se o username e o password forem válidos no sistema, caso contrário, retornará False.

Nosso sistema contém apenas dois nomes de usuário válidos - "admin" e "user".

A senha válida para o nome de usuário "user" é "qweasd".

Para o nome de usuário "admin", qualquer senha é válida!

Bônus: Transforme a função em uma arrow function!
*/

function isValid(username, password) {
  if (username === "admin") {
    return true;
  }
  if (username === "user" && password === "qweasd") {
    return true;
  }
  return false;
}
