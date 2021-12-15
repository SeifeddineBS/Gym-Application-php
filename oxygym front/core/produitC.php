<?PHP
require_once "../config.php";
class ProduitC
{
function afficherProduit ($produit){
		echo "idP: ".$produit->getidP()."<br>";
		echo "nomP: ".$produit->getNom()."<br>";
		echo "quantiteP: ".$produit->getQuantite()."<br>";
		echo "description: ".$produit->getDescription()."<br>";
		echo "prix: ".$produit->getPrix()."<br>";
		echo "image: ".$produit->getimage()."<br>";
		
		
	}


	function afficherproduitcat($idc){
		$sql="SElECT * From produit WHERE idC = ".$idc." ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function nombreproduit(){
		$sql="SELECT count(*) AS nproduit FROM produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());}}

	function ajouterProduit($produit){ 
		$sql="insert into produit (idP,nomP,quantiteP,description,prix,image) values (:idP,:nomP,:quantiteP,:description,:prix,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idP=$produit->getidP();
        $nomP=$produit->getNom();
        $quantiteP=$produit->getQuantite();
        $description=$produit->getDescription();
        $prix=$produit->getPrix();
        $image=$produit->getimage();
        
		$req->bindValue(':idP',$idP);
		$req->bindValue(':nomP',$nomP);
		$req->bindValue(':quantiteP',$quantiteP);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$prix);
        $req->bindValue(':image',$image);
            $req->execute();
          /*if(move_uploaded_file($_FILES['tmp_name']['name'], $target)) {
          	$msg="aaaa" ;
          }
          else{
          	$msg="laaa" ; 
          }*/
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherproduits(){
		$sql="SElECT * From produit ORDER BY idP";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function afficherproduitssingle($id){
		$sql="SElECT * From produit WHERE idP = ".$id." ";
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