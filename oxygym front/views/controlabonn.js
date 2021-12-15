function test()
{
	var verif=0;
	if(f.nom.value=="")
	{
		alert("le nom est obligatoire");
	}
	else 
	{
		 verif+=1;
	}
	if(f.prenom.value=="")
	{
		alert("le prenom est obligatoire");
	}
	else
	{
		 verif+=1;
	}
	if(f.dateD.value>f.dateF.value)
	{
		alert("la date du debut doit etre inferieure à la date de la fin");
	}
	else
	{
		 verif+=1;
	}
	if(f.age.value==0)
	{
		alert("l'age est obligatire");
	}
	else
	{
		 verif+=1;
	}
	if(verif==4)
	{
		alert("merci pour votre ajout");
	}
}