qvgph=int(input("Quanto vc ganha por hora "))
qvgph2=int(input("Quantas horas você trabalha por mês "))
qvgph3=qvgph*qvgph2
print("o valor bruto do seu salário é:" ,qvgph3)
resultado=11*qvgph3
resultado2=resultado/100
print("O valor descontado para o imposto de renda:" ,resultado2)
resultado3=8*qvgph3
resultado4=resultado3/100
print("O valor descontado para o inss" ,resultado4)
resultado5=5*qvgph3
resultado6=resultado5/100
print("O valor descontado para o sindicato" ,resultado6)
resultado7=qvgph3-resultado2-resultado4-resultado6
print("O valor líquido do seu salário é" ,resultado7)