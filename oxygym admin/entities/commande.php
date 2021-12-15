<?PHP
class Commande{
	private $idcom;
	private $id;
	private $datecom;
	private $etatcom;
	private $prixcom;
	private $idlivreur;
	private $lieucom;


	function __construct($idcom,$id,$datecom,$etatcom,$prixcom,$idlivreur,$lieucom){
		$this->idcom=$idcom;
		$this->id=$id;
		$this->datecom=$datecom;
		$this->etatcom=$etatcom;
		$this->prixcom=$prixcom;
		$this->idlivreur=$idlivreur;
		$this->lieucom=$lieucom;


	}
	function getIdcom(){
		return $this->idcom;
	}
	function getId(){
		return $this->id;
	}
	function getDatecom(){
		return $this->datecom;
	}
	function getEtatcom(){
		return $this->etatcom;
	}
	function getPrixcom(){
		return $this->prixcom;
	}
	function getIdlivreur(){
		return $this->idlivreur;
	}
	function getLieucom(){
		return $this->lieucom;
	}


	///////////////////////////////
	
	function setIdcom($idcom){
		$this->idcom=$idcom;
	}
	function setId($id){
		$this->idCient=$idCient;
	}
	function setIdLCcom($idLCcom){
		$this->idLCcom;
	}
	function setEtatcom($etatcom){
		$this->etatcom=$etatcom;
	}
	function setPrixcom($prixcom){
		$this->prixcom=$prixcom;
	}
	function setIdlivreur($idlivreur){
		$this->idlivreur=$idlivreur;
	}
	function setLieucom($lieucom){
		$this->lieucom=$lieucom;
	}

	
}

?>