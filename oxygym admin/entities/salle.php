<?php
class salle
//les classes contiennent la définition des objets que l'on va créer par la suite. Prenons l'exemple le plus simple du monde : les gâteaux et leur moule. Le moule est unique. Il peut produire une quantité infinie de gâteaux. Dans ce cas-là, les gâteaux sont les objets et le moule est la classe : le moule va définir la forme du gâteau. La classe contient donc le plan de fabrication d'un objet et on peut s'en servir autant qu'on veut afin d'obtenir une infinité d'objets.

 //il s'agit d'attributs (ou propriétés) et de méthodes.

//Un attribut désigne une variable et une méthode désigne une fonction.
{
	private $num ;
	private $categorie ;
	private $coach ;
    private $description;
	public function getnum()
	//le getter sui il sert à recuperer une valeur d' un attribut 
	//Et le setter à verifier cette valeur 


	{//$: variable.
		return $this->num ;
	}
	public function getcategorie()
	{
		return  $this->categorie ;
	}
	public function getcoach()
	{
		return $this->coach ;
	}
    	public function getdescription()
	{
		return  $this->description ;
	}
    public function setnum($num)
	{
		 $this->num=$num ;
	}
	public function setcategorie($categorie)
	{
		$this->categorie=$categorie ;
	}
	
	public function setcoach($coach)
	{
		$this->coach=$coach ;
	}
    public function setdescription($description)
	{
		$this->description=$description ;
	}
	public function __construct($num,$categorie,$coach,$description)
	{
		$this->num=$num ;
		 $this->categorie=$categorie ;
		$this->coach=$coach ;
        $this->description=$description ;
	}
}
?>