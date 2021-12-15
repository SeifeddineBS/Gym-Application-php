<?php
class client
{
    private $id;
	private $nom;
	private $prenom;
	private $age;
    private $num;
    private $email;
    private $mdp;
	function __construct($id,$nom,$prenom,$age,$num,$email,$mdp)
	{
        $this->id=$id;
		$this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
        $this->num=$num;
        $this->email=$email;
        $this->mdp=$mdp;
	}
    function getId()
    {
        return $this->id;
    }
	function getNom()
    {
        return $this->nom;
    }
    function getPrenom()
    {
        return $this->prenom;
    }
    function getAge()
    {
        return $this->age;
    }
    function getNum()
    {
        return $this->num;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getMdp()
    {
        return $this->mdp;
    }
    function setId($id)
    {
        $this->id = $id;
    }
     function setNom($nom)
    {
        $this->nom = $nom;
    }
     function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
     function setAge($age)
    {
        $this->age = $age;
    }
     function setNum($num)
    {
        $this->num = $num;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
    function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }
}
?>