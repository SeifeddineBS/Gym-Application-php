  <?PHP
include "../config.php" ;
class fournisseurC
{
  function AjouterFournisseur($fournisseur)
  {
    $sql = "insert into fournisseur (id,nom,tell,adresse,salaire) values(:id,:nom,:tell,:adresse, :salaire)";
    $db = config::getConnexion() ;
    try
    {
      $req = $db->prepare($sql) ;
      $req->BindValue(':id',$fournisseur->getid()) ;
      $req->BindValue(':nom',$fournisseur->getnom()) ;
      $req->BindValue(':tell',$fournisseur->gettell()) ;
      $req->BindValue(':adresse',$fournisseur->getadresse()) ;
      $req->BindValue(':salaire',$fournisseur->getsalaire()) ;
      $req->execute();
      return true ;
    }
    catch (Exception $e)
    {
            echo 'Erreur: '.$e->getMessage();
      return false ;
        }
  }
  
  
  function AfficherFournisseur()
  {
    $sql="SElECT * From fournisseur";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
         catch (Exception $e){
             die('Erreur: '.$e->getMessage());
        } 
  }

  
  function modifierFournisseur($fournisseur,$id)
 {
    $sql="UPDATE fournisseur SET id=:idd, nom=:nom,tell=:tell,adresse=:adresse,salaire=:salaire WHERE id=:id";
    
    $db = config::getConnexion();
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
 try{   
         $req=$db->prepare($sql);
         $idd=$fournisseur->getid();
         $nom=$fournisseur->getnom();
         $tell=$fournisseur->gettell();
         $adresse=$fournisseur->getadresse();
         $salaire=$fournisseur->getsalaire();
    $datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':tell'=>$tell,':adresse'=>$adresse,':salaire'=>$salaire);
    $req->bindValue(':idd',$idd);
    $req->bindValue(':id',$id);
    $req->bindValue(':nom',$nom);
    $req->bindValue(':tell',$tell);
    $req->bindValue(':adresse',$adresse);
    $req->bindValue(':salaire',$salaire);
    
    
             $s=$req->execute();
      
             header('Location: index.php');
         }
         catch (Exception $e){
             echo " Erreur ! ".$e->getMessage();
    echo " Les datas : " ;
   print_r($datas);
         }
    
  }
  
  function supprimerfournisseur($id)
  {
    $sql="DELETE FROM fournisseur where id= :id";
    $db = config::getConnexion();
         $req=$db->prepare($sql);
    $req->bindValue(':id',$id);
    try{
             $req->execute();
         }
         catch (Exception $e){
             die('Erreur: '.$e->getMessage());
         }
  }

  function recupererfournisseur($id){
    $sql="SELECT * from fournisseur where id=$id";
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
         catch (Exception $e){
             die('Erreur: '.$e->getMessage());
         }
  }

function Trierfournisseurs()
{$sql="SELECT * from fournisseur ORDER BY nom ASC";
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