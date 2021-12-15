<?PHP
include ("../core/abonnementC.php");
$abonnementC=new abonnementC();
if (isset($_POST["ida"])){
	$abonnementC->supprimerAbonnement($_POST["ida"]);
	header('Location:GestionAbonnement.php');
}
else{
	echo "menich mfasakh";
}

?>