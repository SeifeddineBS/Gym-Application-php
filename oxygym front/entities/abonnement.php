<?php
class abonnement
{
    private $ida;
	private $nom;
	private $prenom;
	private $age;
	private $dateD;
	private $dateF;
	function __construct($ida,$nom,$prenom,$age,$dateD,$dateF)
	{
        $this->ida=$ida;
		$this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
        $this->dateD=$dateD;
        $this->dateF=$dateF;
	}
    function getIda()
    {
        return $this->ida;
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
    function getDateD()
    {
        return $this->dateD;
    }
    function getDateF()
    {
        return $this->dateF;
    }
     function setIda($ida)
    {
        $this->ida = $ida;
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
     function setDateD($dateD)
    {
        $this->dateD= $dateD;
    }
     function setDateF($dateF)
    {
        $this->dateF = $dateF;
    }
}
?>