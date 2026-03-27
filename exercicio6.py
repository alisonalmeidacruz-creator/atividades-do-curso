vIdade, vTempo = 0, 0

vIdade=int(input("Digite sua idade: "))
vTempo=int(input("Digite o tempo trabalhado: "))

if vIdade >= 65 or vTempo >= 30 or vIdade >= 60 and vTempo >= 25:
    print("Pode se aposentar!")
else:
    print("Não pode se aposentar!")