function test1()
{
	var verif=0;
	if (f1.nom.value=="") {
		alert("le nom est obligatoire");
	}
	else
	{
		 verif+=1;
	}
	if(f1.prenom.value=="")
	{
		alert("le prenom est obligatoire");
	}
	else
	{
		 verif+=1;
	}
	if(f1.age.value==0)
	{
		alert("l'age est obligatoire");
	}
	else
	{
		 verif+=1;
	}
	if(f1.num.value==0)
	{
		alert("le numero de telephone est obligatoire");
		verif+=1;
	}
	if(f1.email.value=="")
	{
		alert("l'adresse e-mail est obligatoire");
		verif+=1;
	}
	if(f1.mdp.value=="")
	{
		alert("le mot de passe est obligatoire");
		verif+=1;
	}
	if(verif==6)
	{
		alert("merci pour votre ajout");
	}
	
	
	
	

}