	<?PHP
include "../config.php" ;
class salleC
{
	function AjouterSalle($salle)
	{
		$sql = "insert into salle (num,categorie,coach,description) values(:num,:categorie,:coach,:description)";
		$db = config::getConnexion() ;
		try
		{
			$req = $db->prepare($sql) ;
			$req->BindValue(':num',$salle->getnum()) ;
			$req->BindValue(':categorie',$salle->getcategorie()) ;
			$req->BindValue(':coach',$salle->getcoach()) ;
            $req->BindValue(':description',$salle->getdescription()) ;
			$req->execute();
			return true ;
		}
		catch (Exception $e)
		{
            echo 'Erreur: '.$e->getMessage();
			return false ;
        }
	}
	
 	
 	function AfficherSalle()
 	{
		$sql="SElECT * From salle";
 		$db = config::getConnexion();
 		try{
 		$liste=$db->query($sql);
 		return $liste;
 		}
         catch (Exception $e){
             die('Erreur: '.$e->getMessage());
        }	
	 }
	 function nombresalle(){
		$sql="SELECT count(*) AS nsalle FROM salle";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());}}
	
 	function modifierSalle($salle,$num)
 {
 		$sql="UPDATE salle SET num=:numm, categorie=:categorie,coach=:coach,description=:description WHERE num=:num";
		
 		$db = config::getConnexion();
 		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
 try{		
         $req=$db->prepare($sql);
 		$numm=$salle->getnum();
         $categorie=$salle->getcategorie();
         $coach=$salle->getcoach();
     $description=$salle->getdescription();
 		$datas = array(':numm'=>$numm, ':num'=>$num, ':categorie'=>$categorie,':coach'=>$coach,':description'=>$description);
 		$req->bindValue(':numm',$numm);
 		$req->bindValue(':num',$num);
 		$req->bindValue(':categorie',$categorie);
 		$req->bindValue(':coach',$coach);
         $req->bindValue(':description',$description);
		
		
             $s=$req->execute();
			
             header('Location: index.php');
         }
         catch (Exception $e){
             echo " Erreur ! ".$e->getMessage();
    echo " Les datas : " ;
   print_r($datas);
         }
		
 	}
	
 	function supprimersalle($num)
 	{
 		$sql="DELETE FROM salle where num= :num";
 		$db = config::getConnexion();
         $req=$db->prepare($sql);
 		$req->bindValue(':num',$num);
 		try{
             $req->execute();
         }
         catch (Exception $e){
             die('Erreur: '.$e->getMessage());
         }
 	}

	function recuperersalle($num){
 		$sql="SELECT * from salle where num=$num";
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