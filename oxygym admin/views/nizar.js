function verifier() {
	var idP=f1.idP.value;
	var nomP=f1.nomP.value;
	var quantiteP=f1.quantiteP.value;
	var prix=f1.prix.value;
	var image=f1.image.value;
	if (idP.length) {}
if (idP.length==0)
	{
		var x=document.getElementById('aa').style.color="red";
		alert("remplir l'identifiant ");
	}
	if(nomP.length==0)
		{
	
			alert("remplir le nom de produit");
		}
		if (quantiteP.length==0) 
		{
			alert("remplir la quantite ");
		}
		if (prix.length==0) 
		{
			alert("mettre le prix ");
		}
		if (image.length==0) 
		{
			alert("il faut mettre l'image de produit ");
		}


}