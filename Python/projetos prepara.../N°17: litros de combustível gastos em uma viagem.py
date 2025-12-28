Tempodeviagem = int(input("Em quantas horas a viagem foi feita? "))
velocidademedia = int(input("Qual foi a velocidade média do automovel? "))

#calculo distancia#
distanciapercorida = velocidademedia*Tempodeviagem
print("A disrtância percorrida foi:" , distanciapercorida ,"km")

#gasto de combustivel#
gastodecombustivel = distanciapercorida/12
print(f"Nessa viagem foi gasto {gastodecombustivel:.2f} litros de combustível")