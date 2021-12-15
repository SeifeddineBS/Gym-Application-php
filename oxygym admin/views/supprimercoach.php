<?PHP
include "../core/coachC.php";
$coachC=new CoachC();
if (isset($_POST["cin"])){
	$coachC->supprimerCoach($_POST["cin"]);
	header('Location: Gestions Coachs.php');
}

?>