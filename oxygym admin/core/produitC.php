<?PHP
include "../config.php";
class ProduitC {
function afficherProduit ($produit){
		echo "idP: ".$produit->getidP()."<br>";
		echo "nomP: ".$produit->getNom()."<br>";
		echo "quantiteP: ".$produit->getQuantite()."<br>";
		echo "description: ".$produit->getDescription()."<br>";
		echo "prix: ".$produit->getPrix()."<br>";
		echo "image: ".$produit->getimage()."<br>";
		
		
	}
	
	
	function ajouterProduit($produit){ 
		$sql="insert into produit (idP,nomP,quantiteP,description,prix,image,idC) values (:idP,:nomP,:quantiteP,:description,:prix,:image,:idc)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idP=$produit->getidP();
        $nomP=$produit->getNom();
        $quantiteP=$produit->getQuantite();
        $description=$produit->getDescription();
        $prix=$produit->getPrix();
        $image=$produit->getimage();
        $idc=$produit->getidc();

		$req->bindValue(':idP',$idP);
		$req->bindValue(':nomP',$nomP);
		$req->bindValue(':quantiteP',$quantiteP);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$prix);
        $req->bindValue(':image',$image);
        $req->bindValue(':idc',$idc);
          $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherproduits(){
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

		function recuperermail(){
		$sql="SElECT * From client ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerproduit($idP){
		$sql="DELETE FROM produit where idP= :idP";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idP',$idP);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierproduit($produit,$idP){
		$sql="UPDATE produit SET idP=:idP, nomP=:nomP,quantiteP=:quantiteP,description=:description,prix=:prix,image=:image WHERE idP=:idP";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idP=$produit->getidP();
        $nomP=$produit->getNom();
        $quantiteP=$produit->getQuantite();
        $description=$produit->getDescription();
        $prix=$produit->getPrix();
        $image=$produit->getimage();
$datas = array( ':idP'=>$idP, ':nomP'=>$nomP,':quantiteP'=>$quantiteP,':description'=>$description,':prix'=>$prix,':image'=>$image);
	
		$req->bindValue(':idP',$idP);
		$req->bindValue(':nomP',$nomP);
		$req->bindValue(':quantiteP',$quantiteP);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':image',$image);		
            		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererproduit($idP){
		$sql="SELECT * from produit where idP=$idP";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherProduit($idP){
		$sql="SELECT * from produit where idP=$idP";
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