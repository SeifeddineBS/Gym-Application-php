<?php
include ("../config.php");
include ("../entities/abonnement.php");
class abonnementC
{
	function ajouterAbonnement($abonnement)
	{
       $sql = "INSERT INTO abonnement(ida,nom,prenom,age,dateD,dateF)values(:ida,:nom,:prenom,:age,:dateD,:dateF)";//requete sql
        $db= config::getConnexion();
        try {
            $ida=$abonnement->getIda();
        	$nom=$abonnement->getNom();
            $prenom=$abonnement->getPrenom(); 
            $age=$abonnement->getAge();
            $dateD=$abonnement->getDateD();
        	$dateF=$abonnement->getDateF();
            $req = $db->prepare($sql);
            $req->bindValue(':ida', $ida);
            $req->bindValue(':nom', $nom);
            $req->bindValue(':prenom', $prenom);
            $req->bindValue(':age', $age);
            $req->bindValue(':dateD', $dateD);
            $req->bindValue(':dateF', $dateF);
           
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
    }
    function nombreabonn(){
		$sql="SELECT count(*) AS nabonn FROM abonnement";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());}}
}
?>