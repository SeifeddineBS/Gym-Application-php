<?PHP
include "../config.php";
class CoursC {
	function afficherCours(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.id= a.id";
		$sql="SElECT * From cours";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function ajouterCours($cours){
		$sql="insert into cours (id,nom,categorie,nombremin,nombremax,date,heure,idcoach,idsalle) values (:id,:nom, :categorie,:nombremin,:nombremax,:date,:heure,:idcoach,:idsalle)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$id=$cours->getId();
		$nom=$cours->getNom();
		$categorie=$cours->getCategorie();
		$nombremin=$cours->getNombremin();
        $nombremax=$cours->getNombremax();
        $date=$cours->getDate();
		$heure=$cours->getHeure();
		$idcoach=$cours->getIdcoach();
        $idsalle=$cours->getIdsalle();

	
		$req->bindValue(':id',$id);

		$req->bindValue(':nom',$nom);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':nombremin',$nombremin);
		$req->bindValue(':nombremax',$nombremax);
		$req->bindValue(':date',$date);
		$req->bindValue(':heure',$heure);
		$req->bindValue(':idcoach',$idcoach);
		$req->bindValue(':idsalle',$idsalle);


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function supprimerCours($id){
		$sql="DELETE FROM cours where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCours($coursc,$id){
		$sql="UPDATE cours SET  id=:id,nom=:nom,categorie=:categorie,nombremin=:nombremin,nombremax=:nombremax,date=:date,heure=:heure WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		$id=$coursc->getId();
		$nom=$coursc->getNom();
        $categorie=$coursc->getCategorie();
        $nombremin=$coursc->getNombremin();
        $nombremax=$coursc->getNombremax();
		$date=$coursc->getDate();
		$heure=$coursc->getHeure();

	

		$datas = array(':id'=>$id,':nom'=>$nom, ':categorie'=>$categorie, ':nombremin'=>$nombremin,':nombremax'=>$nombremax,':date'=>$date,':heure'=>$heure);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':nombremin',$nombremin);
		$req->bindValue(':nombremax',$nombremax);
		$req->bindValue(':date',$date);
		$req->bindValue(':heure',$heure);


		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCours($id){
		$sql="SELECT * from  cours where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function tri_heure()
	{
	
		$sql="SELECT * FROM cours ORDER BY heure ASC ";
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