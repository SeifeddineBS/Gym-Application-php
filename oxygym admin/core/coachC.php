<?PHP
include "../config.php";
class CoachC {
	function triparsalaire(){
		$sql="SELECT * FROM coach ORDER BY salaire ASC ";
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
	function ajouterCoach($coachc){
		$sql="insert into coach (cin,nomprenom,email,age,specialite,experience,salaire,date,image) values (:cin,:nomprenom, :email,:age,:specialite,:experience,:salaire,:date,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$cin=$coachc->getCin();
		$nomprenom=$coachc->getNomprenom();
		$email=$coachc->getEmail();
		$age=$coachc->getAge();
        $specialite=$coachc->getSpecialite();
        $experience=$coachc->getExperience();
        $salaire=$coachc->getSalaire();
		$date=$coachc->getDate();
		$image=$coachc->getImage();

		$req->bindValue(':cin',$cin);
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
	function supprimerCoach($cin){
		$sql="DELETE FROM coach where  cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCoach($coachc,$cin){
		$sql="UPDATE coach SET  cin=:cin,nomprenom=:nomprenom,email=:email,age=:age,specialite=:specialite,experience=:experience,salaire=:salaire,date=:date WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
		$cin=$coachc->getCin();
		$nomprenom=$coachc->getNomprenom();
        $email=$coachc->getEmail();
        $age=$coachc->getAge();
        $specialite=$coachc->getSpecialite();
		$experience=$coachc->getExperience();
		$salaire=$coachc->getSalaire();
		$date=$coachc->getDate();

	

		$datas = array(':cin'=>$cin,':nomprenom'=>$nomprenom, ':email'=>$email, ':age'=>$age,':specialite'=>$specialite,':experience'=>$experience,':salaire'=>$salaire,':date'=>$date);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nomprenom',$nomprenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':age',$age);
		$req->bindValue(':specialite',$specialite);
		$req->bindValue(':experience',$experience);
		$req->bindValue(':salaire',$salaire);
		$req->bindValue(':date',$date);


		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCoach($cin){
		$sql="SELECT * from  coach where cin=$cin";
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