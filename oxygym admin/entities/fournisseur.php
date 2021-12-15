<?php
class fournisseur
{
	private $id ;
	private $nom ;
	private $tell ;
    private $adresse;
    private $salaire;

	public function getid()
	{
		return $this->id ;
	}
	public function getnom()
	{
		return  $this->nom ;
	}
	public function gettell()
	{
		return $this->tell ;
	}
    	public function getadresse()
	{
		return  $this->adresse ;
	}
	public function getsalaire()
	{
		return  $this->salaire ;
	}
    public function setid($id)
	{
		 $this->id=$id ;
	}
	public function setnom($nom)
	{
		$this->nom=$nom ;
	}
	
	public function settell($tell)
	{
		$this->tell=$tell ;
	}
    public function setadresse($adresse)
	{
		$this->adresse=$adresse ;
	}
	 public function setsalaire($salaire)
	{
		$this->salaire=$salaire ;
	}
	public function __construct($id,$nom,$tell,$adresse,$salaire)
	{
		$this->id=$id ;
		 $this->nom=$nom ;
		$this->tell=$tell ;
        $this->adresse=$adresse ;
        $this->salaire=$salaire ;
	}
}
?>