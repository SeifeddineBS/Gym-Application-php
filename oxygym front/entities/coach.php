<?PHP
class Coach{
	private $nomprenom;
	private $email;
	private $age;
	private $specialite;
	private $experience;
	private $salaire;
	private $date;
	private $image;


	function __construct($nomprenom,$email,$age,$specialite,$experience,$salaire,$date,$image){
		$this->nomprenom=$nomprenom;
		$this->email=$email;
		$this->age=$age;
		$this->specialite=$specialite;
		$this->experience=$experience;
		$this->salaire=$salaire;
		$this->date=$date;
		$this->image=$image;


	}
	
	function getNomprenom(){
		return $this->nomprenom;
	}
	function getEmail(){
		return $this->email;
	}
	function getAge(){
		return $this->age;
	}
	function getSpecialite(){
		return $this->specialite;
	}
	function getExperience(){
		return $this->experience;
	}
	function getSalaire(){
		return $this->salaire;
	}
	function getDate(){
		return $this->date;
	}
	function getImage(){
		return $this->image;
	}
	

	function setNomprenom($nomprenom){
		$this->nomprenom=$nomprenom;
	}
	function setEmail($email){
		$this->email;
	}
	function setAge($age){
		$this->age=$age;
	}
	function setSpecialite($specialite){
		$this->specialite=$specialite;
	}
	function setExperience($experience){
		$this->experience=$experience;
	}
	function setSalaire($salaire){
		$this->salaire=$salaire;
	}
	function setDate($date){
		$this->date=$date;
	}
	function setImage($image){
		$this->image=$image;
	}
	
}

?>