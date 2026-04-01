/*
Um loop infinito é um loop que nunca para porque sua condição é sempre verdadeira, ou não há condição para pará-lo. Embora às vezes útil, eles frequentemente levam a programas congelando ou travando. É como um cachorro perseguindo o próprio rabo para sempre - ele só continua indo e indo sem fim.

Aqui está um exemplo simples de um loop infinito usando um loop while:

while (true) {
    std::cout << "This will print forever!" << std::endl;
}
Neste caso, a condição é sempre true, então o loop executará indefinidamente.

Você também pode criar um loop infinito com um loop for omitindo a condição:

for (;;) {
    std::cout << "This will also print forever!" << std::endl;
}
Aqui, não há condição para verificar, então o loop não tem motivo para parar.

Loops infinitos podem ser úteis em alguns casos, como em servidores que precisam continuar executando até serem parados manualmente. No entanto, na maioria dos casos, eles são problemáticos. Para parar um loop infinito, geralmente você tem que forçar a saída do programa (por exemplo, pressionando Ctrl+C no terminal).


*/