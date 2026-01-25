=begin
Variáveis são contêineres que armazenam valores de dados. Elas são usadas para armazenar, manipular e exibir informações dentro de um programa.

Em resumo, uma variável é como uma unidade de memória que podemos acessar digitando o nome da variável. Cada variável tem um nome único e um valor que pode ser de diferentes tipos. O Ruby é capaz de detectar automaticamente o tipo da variável, o que torna a codificação mais eficiente.

Para inicializar uma variável em Ruby, usamos o seguinte formato:
variable_name = value
=end

# Por exemplo:
age = 25
name = "Alice"

=begin
Tipos de Dados Numéricos

O Ruby tem dois principais tipos de dados numéricos para trabalhar com números:

1. Integers - números inteiros sem pontos decimais. Eles podem ser positivos, negativos ou zero:
=end
count = 100       # Positive integer
temperature = -5  # Negative integer
zero_value = 0    # Zero is also an integer

# 2. Floats - números que contêm pontos decimais. Eles são usados para representar valores fracionários:
price = 19.99      # Positive float
temperature = -3.5 # Negative float
percentage = 0.75  # Float between 0 and 1

# O ponto decimal é o que distingue um float de um inteiro - mesmo 5.0 é um float, não um inteiro.

=begin
Desafio

Fácil
Crie duas variáveis numéricas para representar dados da sala de aula. Primeiro, crie uma variável chamada student_count e atribua a ela o valor inteiro 30. Em seguida, crie uma variável chamada average_score e atribua a ela o valor de ponto flutuante 87.5. Finalmente, exiba ambas as variáveis usando o comando puts.
=end
# TODO: Create the variables below
student_count = 30
average_score = 87.5

# Don't delete the rows below
puts student_count
puts average_score