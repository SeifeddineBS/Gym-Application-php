<?PHP
include "../entities/perso.php";
include "../core/persoC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['poste'])){
$perso1=new Perso($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['poste']);

$perso1C=new PersoC();
$perso1C->ajouterPerso($perso1);
 header('Location: Gestions perso.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>