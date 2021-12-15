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
	function afficherDance($categorie){
		$sql="SELECT * from  cours where categorie=$categorie";
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
		$sql="insert into cours (id,nom,categorie,nombremin,nombremax,date,heure) values (:id,:nom, :categorie,:nombremin,:nombremax,:date,:heure)";
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
	
		$req->bindValue(':id',$id);

		$req->bindValue(':nom',$nom);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':nombremin',$nombremin);
		$req->bindValue(':nombremax',$nombremax);
		$req->bindValue(':date',$date);
		$req->bindValue(':heure',$heure);

		
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
	function rechercherCours_parnom($nom){
		$sql="SELECT * from cours where  nom = '$nom'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherCours_parcategorie($categorie){
		$sql="SELECT * from cours where  categorie = '$categorie'";
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
class CoachC {
	function premiere()
	{
		$sql="SELECT experience FROM coach WHERE experience IS NOT NULL LIMIT 1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function afficherCoach(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From coach";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function ajouterCoach($coach){
		$sql="insert into coach (nomprenom,email,age,specialite,experience,salaire,date,image) values (:nomprenom, :email,:age,:specialite,:experience,:salaire,:date,image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nomprenom=$coach->getNomprenom();
		$email=$coach->getEmail();
		$age=$coach->getAge();
        $specialite=$coach->getSpecialite();
        $experience=$coach->getExperience();
        $salaire=$coach->getSalaire();
		$date=$coach->getDate();
		$image=$coach->getImage();


		$req->bindValue(':nomprenom',$nomprenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':age',$age);
		$req->bindValue(':specialite',$specialite);
		$req->bindValue(':experience',$experience);
		$req->bindValue(':salaire',$salaire);
		$req->bindValue(':date',$date);
		$req->bindValue(':image',$image);


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function supprimerCoach($id){
		$sql="DELETE FROM coach where id= :id";
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





}

?>