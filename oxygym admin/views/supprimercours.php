<?PHP
include "../core/coursC.php";
$coursC=new CoursC();
if (isset($_POST["id"])){
	$coursC->supprimerCours($_POST["id"]);
	header('Location: Gestions Cours.php');
}

?>