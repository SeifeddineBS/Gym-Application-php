<?PHP
class Categorie{
	private $idC;
	private $nomC;
	private $famille;
	function __construct($idC,$nomC,$famille){
		$this->idC=$idC;
		$this->nomC=$nomC;
		$this->famille=$famille;
	}
	
	function getidC(){
		return $this->idC;
	}
	function getNom(){
		return $this->nomC;
	}
	function getFamille(){
		return $this->famille;
	}
	function setidC($idC){
		$this->idC=$idC;
	}
	function setNom($nomC){
		$this->nomC=$nomC;
	}
	function setFamille($famille){
		$this->famille=$famille;
	}
	
	
}

?>