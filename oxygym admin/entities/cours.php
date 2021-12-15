<?PHP
class Cours{
	private $id;
	private $nom;
	private $categorie;
	private $nombremin;
	private $nombremax;
	private $date;
	private $heure;
	private $idcoach;
	private $idsalle;



	function __construct($id,$nom,$categorie,$nombremin,$nombremax,$date,$heure,$idcoach,$idsalle){
		$this->id=$id;
		$this->nom=$nom;
		$this->categorie=$categorie;
		$this->nombremin=$nombremin;
		$this->nombremax=$nombremax;
		$this->date=$date;
		$this->heure=$heure;
		$this->idcoach=$idcoach;
		$this->idsalle=$idsalle;



	}
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getCategorie(){
		return $this->categorie;
	}
	function getNombremin(){
		return $this->nombremin;
	}
	function getNombremax(){
		return $this->nombremax;
	}
	
	function getDate(){
		return $this->date;
	}
	function getHeure(){
		return $this->heure;
	}
	function getIdcoach(){
		return $this->idcoach;
	}
	function getIdsalle(){
		return $this->idsalle;
	}
	
	function setId($id){
		$this->id=$id;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setCategorie($categorie){
		$this->categorie=$categorie;
	}
	function setNombremin($nombremin){
		$this->nombremin=$nombremin;
	}
	function setNombremax($nombremax){
		$this->nombremax=$nombremax;
	}
	function setDate($date){
		$this->date=$date;
	}
	function setHeure($heure){
		$this->heure=$heure;
	}
	function setIdcoach($idcoach){
		$this->idcoach=$idcoach;
	}
	function setIdsalle($idsalle){
		$this->idsalle=$idsalle;
	}
	
	
}

?>