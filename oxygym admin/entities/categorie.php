<?PHP
class Categorie{
	private $idC;
	private $nomC;
	private $famille;
	function __construct($idC,$nomC,$famille){
		
		$this->nomC=$nomC;
		$this->famille=$famille;
		$this->idC=$idC;
	}
	
	function getidC()
	{
		return $this->idC;
	}
	function getnom()
	{
		return $this->nomC;
	}
	function getfamille()
	{
		return $this->famille;
	}
	function setidC($idC)
	{
		$this->idC=$idC;
	}
	
	function setnom($nomC)
	{
		$this->nomC=$nomC;
	}
	function setfamille($famille)
	{
		$this->famille=$famille;
	
	}
}


?>