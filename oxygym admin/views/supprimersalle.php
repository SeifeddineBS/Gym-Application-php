<?PHP
include "../Core/salleC.php";
$salleC=new salleC();
if (isset($_GET["num"])){
	$salleC->supprimersalle($_GET["num"]);
	header('Location: Gestions salles.php');
}

?>