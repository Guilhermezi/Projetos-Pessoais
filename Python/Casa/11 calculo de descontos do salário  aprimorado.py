valor_salario = float(input("Qual o valor bruto do seu salário? "))
recebe_adicional_noturno = input("Você recebe adicional noturno? (sim/não): ").strip().lower()

horas_adicional_noturno_mes = 0
if recebe_adicional_noturno == 'sim':
    horas_adicional_noturno_mes = float(input("Quantas horas de adicional noturno você faz no mês? "))

horas_trabalhadas_mes = int(input("Quantas horas você trabalha por mês? "))
valor_hora = valor_salario / horas_trabalhadas_mes

adicional_noturno = valor_hora * 0.20 * horas_adicional_noturno_mes

porcentagem_hora_extra = float(input("Quantos porcento a mais você recebe por cada hora extra? "))
horas_extra_mes = float(input("Quantas horas de hora extra você faz no mês? "))
valor_hora_extra = valor_hora * (1 + porcentagem_hora_extra / 100)
salario_bruto = valor_salario + adicional_noturno + valor_hora_extra * horas_extra_mes

print("O valor total de horas extras é:", valor_hora_extra * horas_extra_mes)
print("O valor total de adicionais noturnos é:", adicional_noturno)

if 2112.01 <= salario_bruto <= 2826.65:
    irrf = salario_bruto * 7.5 / 100 - 158.40
elif 2826.66 <= salario_bruto <= 3751.05:
    irrf = salario_bruto * 15 / 100 - 370.40
elif 3751.06 <= salario_bruto <= 4664.68:
    irrf = salario_bruto * 22.5 / 100 - 651.73
elif salario_bruto > 4664.68:
    irrf = salario_bruto * 27.5 / 100 - 884.96
else:
    irrf = 0.0
print("O valor descontado para o Imposto de Renda é:", irrf)

if salario_bruto <= 1412.00:
    inss = salario_bruto * 7.5 / 100
elif 1412.01 <= salario_bruto <= 2666.68:
    inss = salario_bruto * 9 / 100 - 21.18
elif 2666.69 <= salario_bruto <= 4000.03:
    inss = salario_bruto * 12 / 100 - 101.18
elif 4000.04 <= salario_bruto <= 7786.02:
    inss = salario_bruto * 14 / 100 - 181.18
else:
    inss = 7786.02 * 14 / 100 - 181.18
print("O valor descontado para o INSS é:", inss)

sindicato = 310.70
print("O valor descontado para o sindicato é:", sindicato)

salario_liquido = salario_bruto - irrf - inss - sindicato
print("O valor final do seu salário após todos os descontos é:", salario_liquido)
