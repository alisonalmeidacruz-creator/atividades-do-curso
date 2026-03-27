vNota1, vNota2, vNota3, vNota4, vMedia, vFrequencia = 0.0, 0.0, 0.0, 0.0, 0.0, 0.0
vAulas, vFaltas = 0, 0

vNota1=float(input("Digite a primeira nota: "))
vNota2=float(input("Digite a segunda nota: "))
vNota3=float(input("Digite a terceira nota: "))
vNota4=float(input("Digite a quarta nota: "))
vAulas=int(input("Digite a quantidade de aulas: "))
vFaltas=int(input("Digite a quantidade de faltas: "))

vFrequencia=(vAulas-vFaltas)/vAulas

if vFrequencia >= 0.75:
    vMedia=(vNota1 + vNota2 + vNota3 + vNota4) / 4
    if vMedia >= 7:
        print("Aluno aprovado!")
    else:
        if vMedia >= 5:
            print("Aluno em recuperação!")
        else:
            print("Aluno reprovado!")
else:
    print("Reprovado por faltas!")
