vSalario, vReajuste, vNovoSalario = 0.0, 0.0, 0.0

vSalario=int(input("Digite o valor do salário: "))

if vSalario < 2000:
    vReajuste=vSalario*0.15
    vNovoSalario=vSalario+vReajuste
    
else:
    if vSalario <= 5000:
        vReajuste=vSalario*0.10
        vNovoSalario=vSalario+vReajuste
        
    else:
        vReajuste=vSalario*0.05
        vNovoSalario=vSalario+vReajuste
        
        
print(f"Valor Reajustado: {vReajuste:.2f}")
print(f"O novo salário é {vNovoSalario:.2f}")