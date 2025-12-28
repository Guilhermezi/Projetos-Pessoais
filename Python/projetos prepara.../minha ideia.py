senha=int(input("Digite a sua senha: "))
qsenha=int(input("Qual a sua senha ? "))
tentativas=0
while qsenha==senha or tentativas<=3:
  tentativas+=1
  if (qsenha==senha):
    print("Senha correta")
    break

  else:
    print("Senha incorreta")
    qsenha=int(input("Qual a sua senha ? "))