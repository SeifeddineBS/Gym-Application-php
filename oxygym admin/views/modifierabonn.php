<HTML>
<head>
</head>
<body>
<?php
include "../core/abonnementC.php";
if (isset($_GET['ida'])){
	$abonnementC=new abonnementC();
    $result=$abonnementC->recupererAbonnement($_GET['ida']);
	foreach($result as $row){
	    $ida=$row['ida'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$age=$row['age'];
		$dateD=$row['dateD'];
		$dateF=$row['dateF'];
?>
<form method="POST">
<table>
<!--<caption>Modifier Employe</caption>-->
<tr>
<td>Identifiant</td>
<td><input type="text" name="ida" value="<?PHP echo $ida ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" id="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" name="age" value="<?PHP echo $age ?>"></td>
</tr>
<tr>
<td>Date Du Debut</td>
<td><input type="date" name="dateD" value="<?PHP echo $dateD ?>"></td>
</tr>
<tr>
<td>Date De La Fin</td>
<td><input type="date" name="dateF" value="<?PHP echo $dateF ?>"></td>
</tr>
<!--<tr>
<td>Mot De Passe</td>
<td><input type="text" name="mdp" value="<?PHP echo $mdp ?>"></td>
</tr>-->

<tr>
<td></td>
<td><input type="hidden" name="ida" value="<?PHP echo $_GET['ida'];?>"></td>
</tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$abonnement=new abonnement($_POST['ida'],$_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['dateD'],$_POST['dateF']);
	$abonnementC->modifierAbonnement($abonnement,$_POST['ida']);
	echo $_POST['ida'];
	header('Location: GestionAbonnement.php');
}
?>
</body>
</HTMl>