<?PHP
include "../entities/coach.php";
include "../core/coachC.php";

if (isset($_POST['cin']) and isset($_POST['nomprenom']) and isset($_POST['email']) and isset($_POST['age']) and isset($_POST['specialite']) and isset($_POST['experience'])and isset($_POST['salaire'])and isset($_POST['date'])and isset($_POST['image'])){
$coach1=new Coach($_POST['cin'],$_POST['nomprenom'],$_POST['email'],$_POST['age'],$_POST['specialite'],$_POST['experience'],$_POST['salaire'],$_POST['date'],$_POST['image']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$coach1C=new CoachC();
$coach1C->ajouterCoach($coach1);
 header('Location: Gestions Coachs.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>