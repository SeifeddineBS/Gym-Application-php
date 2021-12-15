<?PHP
include "../Core/fournisseurC.php";
$fournisseurC=new fournisseurC();
if (isset($_GET["id"])){
	$fournisseurC->supprimerfournisseur($_GET["id"]);
	header('Location: Gestions fournisseurs.php');
}

?>