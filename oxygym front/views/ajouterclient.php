<?php
include ("../core/clientC.php");


if(isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['age']) and isset($_POST['num']) and isset($_POST['email']) and isset($_POST['mdp']))
{
	$client= new client( $_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['age'],$_POST['num'],$_POST['email'],$_POST['mdp']);
	$clientC=new clientC();
	$clientC->ajouterClient($client);
	header('Location:b.html');
}
else
{echo"verifier les champs";}
?>