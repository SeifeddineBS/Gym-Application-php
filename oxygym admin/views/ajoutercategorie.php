<?PHP
include "../entities/categorie.php";
include "../core/categorieC.php";
include "../config.php";

if (isset($_POST['idC']) and isset($_POST['nomC']) and isset($_POST['famille']))
{
$categorie1=new Categorie($_POST['idC'],$_POST['nomC'],$_POST['famille']);

$categorie1C=new CategorieC();
$categorie1C->ajouterCategorie($categorie1);
header('Location: affichercategorie.php');
	
}else{
	echo "vérifier les champs";
}
//*/
?>
