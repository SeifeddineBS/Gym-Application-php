<?PHP
include "../Entities/salle.php" ;
include "../Core/salleC.php" ;
	if (isset($_GET['num']) and isset ($_GET['categorie']) and isset($_GET['coach']) and isset ($_GET['description']))
{	
$salle=new salle($_GET['num'],$_GET['categorie'],$_GET['coach'],$_GET['description']);
$salleC=new salleC() ;
$salleC->AjouterSalle($salle);
header('Location: Gestions salles.php');
}
else
	{
		echo "vérifier les champs";	
	}


?>