<?PHP
include "../core/commandeC.php";
$commandeC=new CommandeC();
if (isset($_POST["idcom"])){
	$commandeC->supprimerCommande($_POST["idcom"]);
	header('Location: Gestions Commandes.php');
}

?>