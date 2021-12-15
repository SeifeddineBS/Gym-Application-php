<?php
include ("../config.php");
include ("../entities/client.php");
class clientC
{
	function ajouterClient($client)
	{
       $sql = "INSERT INTO client (id,nom,prenom,age,num,email,mdp) values (:id,:nom,:prenom,:age,:num,:email,:mdp)";//requete sql
        $db= config::getConnexion();
        try {
            $is=$client->getId();
        	$nom=$client->getNom();
            $prenom=$client->getPrenom(); 
            $age=$client->getAge();
            $num=$client->getNum();
        	$email=$client->getEmail();
        	$mdp=$client->getMdp();
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            $req->bindValue(':nom', $nom);
            $req->bindValue(':prenom', $prenom);
            $req->bindValue(':age', $age);
            $req->bindValue(':num', $num);
            $req->bindValue(':email', $email);
            $req->bindValue(':mdp', $mdp);
           
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
	}
    function afficher_return()
        {
            $config=new config();
            $instance=$config->getConnexion();

           $response=$instance->query('SELECT * FROM client');
            return $response;
        }
        function supprimerClient($id)
    {
        $sql="DELETE FROM client where id= :id";
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
    function modifierClient($client,$id)
{
        $sql="UPDATE client SET id=:id, nom=:nom, prenom=:prenom, age=:age, num=:num, email=:email , mdp=:mdp WHERE id=:id";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
        $id=$client->getId();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $age=$client->getAge();
        $num=$client->getNum();
        $email=$client->getEmail();
        $mdp=$client->getMdp();
        $datas = array(':id'=>$id, ':nom'=>$nom, ':prenom'=>$prenom, ':age'=>$age,':num'=>$num, 'email'=>$email, 'mdp'=>$mdp);
        $req->bindValue(':id',$id);
        $req->bindValue(':id',$id);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prenom',$prenom);
        $req->bindValue(':age',$age);
        $req->bindValue(':num',$num);
        $req->bindValue(':email',$email);
        $req->bindValue(':mdp',$mdp);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
    function recupererClient($id)
    {
        $sql="SELECT * from client where id=$id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function rechercherClient($id){
        $sql="SELECT * from client where id=$id";
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