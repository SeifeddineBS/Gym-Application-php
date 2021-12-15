<?PHP
 include "../entities/panier.php";

include "../core/panierC.php";




if (isset($_POST['idp']) and isset($_POST['prix']) and isset($_POST['image'])and isset($_POST['nomp']))
{echo($_POST['idp']);
// $panier1=new panierc($_POST['idp'],$_POST['image'],$_POST['nomp'],$_POST['prix']);

// $panier1C=new panierC();
// $panier1C->ajouterPanier($panier1);
// header('Location: panier.php');

 }	

else
{
	echo "aaaaaa";
}


//*/

?>