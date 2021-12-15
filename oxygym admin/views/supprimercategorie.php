<?PHP
include "../core/categorieC.php";
include "C:\wamp\www\projet-web-nizar/config.php";
$categorieC=new categorieC();
if (isset($_POST["idC"])){
	$categorieC->supprimercategorie($_POST["idC"]);
	header('Location: affichercategorie.php');
}

?>