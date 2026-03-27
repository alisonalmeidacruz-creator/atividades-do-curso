vValor, vImposto, vTotal = 0.0, 0.0, 0.0
vEstado = ''

vValor=float(input("Digite o valor: "))
vEstado=str(input("Digite o seu Estado: "))
while vEstado == 'RJ':
    print("Carga será roubada antes da entrega!")
    vEstado=str(input("Digite o seu Estado: "))
    break

if vEstado == 'SP':
    vImposto=vValor*0.25
elif vEstado == 'RJ':
    print("Compra roubada antes da entrega!")
elif vEstado == 'PR':
    vImposto=vValor*0.15
elif vEstado == 'SC':
    vImposto=vValor*0.12
else:
    print("Estado não cadastrado!")
                
vTotal=vValor+vImposto
print(f"Valor do imposto: {vImposto:.2f}")
print(f"vTotal: {vTotal:.2f}")
