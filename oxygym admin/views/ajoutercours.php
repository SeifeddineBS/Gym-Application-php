<?PHP
include "../entities/cours.php";
include "../core/coursC.php";

if (isset($_POST['id'])and isset($_POST['nom']) and isset($_POST['categorie']) and isset($_POST['nombremin']) and isset($_POST['nombremax']) and isset($_POST['date']) and isset($_POST['heure'])and isset($_POST['idcoach'])and isset($_POST['idsalle'])){
$cours1=new Cours($_POST['id'],$_POST['nom'],$_POST['categorie'],$_POST['nombremin'],$_POST['nombremax'],$_POST['date'],$_POST['heure'],$_POST['idcoach'],$_POST['idsalle']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$cours1C=new CoursC();
$cours1C->ajouterCours($cours1);
 header('Location: Gestions Cours.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>