<?PHP
class Cours{
	private $id;
	private $nom;
	private $categorie;
	private $nombremin;
	private $nombremax;
	private $date;
	private $heure;

	function __construct($id,$nom,$categorie,$nombremin,$nombremax,$date,$heure){
		$this->id=$id;
		$this->nom=$nom;
		$this->categorie=$categorie;
		$this->nombremin=$nombremin;
		$this->nombremax=$nombremax;
		$this->date=$date;
		$this->heure=$heure;


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
	
	
}

?>