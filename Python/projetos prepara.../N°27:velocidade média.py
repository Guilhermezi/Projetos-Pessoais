voltas = int(input("Qual foi o número de voltas da corrida? "))
metros = int(input("Quantos metros tem o circuito da corrida? "))
tempo = int(input("Quanto tempo durou a corrida em minutos? "))

# Cálculo da duração de cada volta em minutos
duracaovolta = tempo / voltas
print("Cada volta durou", duracaovolta, "minutos")

# Cálculo da velocidade média
# Convertendo metros para quilômetros (metros / 1000)
# Convertendo minutos para horas (tempo / 60)
quilometros = (voltas * metros) / 1000
horas = tempo / 60
velocidademedia = quilometros / horas
print("A velocidade média do carro na corrida foi de:", velocidademedia, "km/h")
