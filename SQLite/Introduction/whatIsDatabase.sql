-- Bancos de dados são como grandes baldes que armazenam dados de forma organizada. Aqui estão dois exemplos de quando queremos criar um banco de dados:
-- Um banco de dados para uma universidade para salvar dados sobre alunos, cursos e professores.
-- Um banco de dados para uma concessionária de carros para rastrear vendas, estoque de carros e funcionários.
-- E muitos outros
-- Dentro de um banco de dados há tabelas, e cada tabela tem um nome, nomes de colunas e linhas. Por exemplo, esta é uma tabela <strong>workers</strong>:
--  	firstname	lastname	age	exp_years	 gender
-- 1	Ghully	      Thuas	    29	    2.3     Feminino
-- 2	Bostal	    Shkolky	    32	    0.2	    Masculino
-- 3	Qaostu	    Malop	    21	    4	    Feminino

-- A tabela workers tem 5 colunas e 3 linhas. Não precisamos de nenhuma ferramenta especial para saber que temos 3 trabalhadores, e é fácil calcular a idade média de todos eles (29 + 32 + 21) / 3. Mas o que acontece quando temos mil ou até um milhão de linhas?

-- É aí que entram os bancos de dados e o SQL (Linguagem de Consulta Estruturada). O SQL é uma linguagem padrão projetada especificamente para gerenciar e manipular dados em bancos de dados. Bancos de dados armazenam todas as tabelas, e o SQL nos ajuda a extrair e analisar os dados de que precisamos.

-- Para extrair a tabela inteira do banco de dados, precisamos especificar quais colunas SELECT e FROM qual tabela extrair.

-- Para fazer isso, vamos escrever:
SELECT column1, column2, column3 FROM table_name

-- Desafio

-- Fácil
-- Tabelas e colunas disponíveis:

-- workers: firstname, lastname, age, exp_years, gender
 

-- Escreva uma consulta para extrair toda a tabela (todas as colunas) do banco de dados.
SELECT firstname, lastname, age, exp_years, gender FROM workers;
