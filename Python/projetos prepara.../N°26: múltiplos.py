primeiroN = int(input("Dígite um número inteiro: "))
segundoN = int(input("Dígite outro número inteiro: "))

if primeiroN < segundoN:
  resto = segundoN % primeiroN

  if resto == 0 :
    print("O segundo número é multiplo do primeiro ")

  else:
    print("O segundo número não é multiplo do primeiro")

else :
  resto2 = primeiroN % segundoN

  if resto2 == 0:
    print("O primeiro número é multiplo do segundo ")

  else:
    print("O primeiro número não é multiplo do segundo ")
