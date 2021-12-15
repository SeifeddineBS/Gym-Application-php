<?PHP
include "../entities/produit.php";
include "../core/produitC.php";

if (isset($_POST['idP']) and isset($_POST['nomP']) and isset($_POST['quantiteP']) and isset($_POST['description']) and isset($_POST['prix'])and isset($_POST['image']))
{
$produit1=new Produit($_POST['idP'],$_POST['nomP'],$_POST['quantiteP'],$_POST['description'],$_POST['prix'],$_POST['image'],$_POST['idc']);

$produit1P=new ProduitC();
$produit1P->ajouterProduit($produit1);
header('Location: Gestions Produits.php');
	
}
else
{
	echo "vérifier les champs";
}
//*/

?>

