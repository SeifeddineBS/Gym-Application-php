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
    function afficher_return()
        {
            $config=new config();
            $instance=$config->getConnexion();

           $response=$instance->query('SELECT * FROM abonnement');
            return $response;
        }
         function supprimerAbonnement($ida)
    {
        $sql="DELETE FROM abonnement where ida= :ida";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':ida',$ida);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierAbonnement($abonnement,$ida)
{
        $sql="UPDATE abonnement SET ida=ida, nom=:nom, prenom=:prenom ,age=:age ,dateD=:dateD ,dateF=:dateF WHERE ida=:ida";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $ida=$abonnement->getIda();
        $nom=$abonnement->getNom();
        $prenom=$abonnement->getPrenom();
        $age=$abonnement->getAge();
        $dateD=$abonnement->getDateD();
        $dateF=$abonnement->getDateF();

        $datas = array(':ida'=>$ida, ':nom'=>$nom, ':prenom'=>$prenom, ':age'=>$age,':dateD'=>$dateD ,':dateF'=>$dateF );
        $req->bindValue(':ida',$ida);
        $req->bindValue(':ida',$ida);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':age',$age);
        $req->bindValue(':dateD',$dateD);
        $req->bindValue(':dateF',$dateF);

        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
     function recupererAbonnement($ida){
        $sql="SELECT * from abonnement where ida=$ida";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
     function rechercherAbonnement($ida){
        $sql="SELECT * from abonnement where ida=$ida";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}
?>