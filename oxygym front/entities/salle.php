<?php
class salle
{
	private $num ;
	private $categorie ;
	private $coach ;
    private $description;
	public function getnum()
	{
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