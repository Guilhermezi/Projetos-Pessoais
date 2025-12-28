investimento = int(input("Qual foi o tipo de investimento?\n1 para poupança e 2 para renda fixa: "))
valor = float(input("Qual foi o valor do investimento: "))

if investimento == 1:
    apos30 = valor * 1.03  # 3% de aumento
    print(f"O valor desse investimento após 30 dias é de: {apos30:.2f} reais")
elif investimento == 2:
    apos302 = valor * 1.05  # 5% de aumento para renda fixa
    print(f"O valor desse investimento após 30 dias é de: {apos302:.2f} reais")
else:
    print("Tipo de investimento inválido")
