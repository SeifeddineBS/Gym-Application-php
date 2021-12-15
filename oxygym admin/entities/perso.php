<?PHP
class Perso{
	private $cin;
	private $nom;
	private $prenom;
	private $poste;
	

	function __construct($cin,$nom,$prenom,$poste){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->poste=$poste;
		

	}
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	
	function getPrenom(){
		return $this->prenom;
	}
	function getPoste(){
		return $this->poste;
	}
	
	
	
	function setCin($cin){
		$this->cin=$cin;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setPoste($poste){
		$this->poste=$poste;
	}
	
	
	
}

?>