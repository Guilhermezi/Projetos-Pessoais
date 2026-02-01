-- Vamos supor que temos a seguinte tabela:

sales
 	country	|city	 | amount
1	Poland	|Warsaw	 |  13
2	Germany	|Berlin	 |  24
3	Poland	|Katowice|  56
-- E queremos saber todos os países onde o produto foi vendido.

-- Se usarmos a consulta normal que conhecemos: SELECT country from sales ela retornará Poland, Germany, Poland. Isso não é o que estamos procurando porque Poland é repetido duas vezes.

-- Para resolvê-lo, podemos usar a palavra-chave DISTINCT:
SELECT DISTINCT country FROM sales

-- Desafio

-- Fácil
-- Tabelas e colunas disponíveis:

-- sales: coin, amount
-- Busque todas as moedas únicas que foram usadas na tabela sales
SELECT DISTINCT coin FROM sales;