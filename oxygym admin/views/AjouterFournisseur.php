<?PHP
include "../Entities/fournisseur.php" ;
include "../Core/fournisseurC.php" ;
	if (isset($_GET['id']) and isset ($_GET['nom']) and isset($_GET['tell']) and isset ($_GET['adresse']) and isset($_GET['salaire']))
{	
$fournisseur=new fournisseur($_GET['id'],$_GET['nom'],$_GET['tell'],$_GET['adresse'],$_GET['salaire']);
$fournisseurC=new fournisseurC() ;
$fournisseurC->AjouterFournisseur	($fournisseur);
header('Location: Gestions fournisseurs.php');
}
else
	{
		echo "vérifier les champs";	
	}


?>