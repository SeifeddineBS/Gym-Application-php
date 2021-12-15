function test2()
{
	if (f2.email.value=="") {
		alert("l'adresse e-mail est obligatoire");
	}
	else
	{
		 verif+=1;
	}
	if(f2.mdp.value=="")
	{
		alert("le mot de passe est obligatoire");
	}
	else
	{
		 verif+=1;
	}
	if(verif==2)
	{
		alert("merci pour votre ajout");
	}
}