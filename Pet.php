<?php
	//include("Owner.php"); //Including Owner Class to allow use of aggregation

	class Pet{
		private $idPet = 0;
		private $name = "";
		private $type = "";
		private $breed = "";
		private $birthdayDate = "";
		private $idOwner = ""; //aggregation from owner, need to be initialized

		public function __construct($n, $t, $b, $bd, $io){
			$this->name=$n;
			$this->type=$t;
			$this->breed = $b;
			$this->birthdayDate = $bd;
			$this->idOwner = $io;

		}

		public function setIdPet($id){
			$this->idPet = $id;
		}

		public function setName($name){
			$this->name = $name;
		}

		public function setType($type){
			$this->type = $type;
		}

		public function setBreed($breed){
			$this->breed = $breed;
		}

		public function setBirthdayDate($birthday){
			$this->birthdayDate = $birthday;
		}


		public function getIdPet(){
			return $this->idPet;
		}

		public function getName(){
			return $this->name . "<br>";
		}


		public function getType(){
			return $this->type . "<br>";
		}

		public function getBreed(){
			return $this->breed . "<br>";
		}

		public function getBirthdayDate(){
			return $this->birthdayDate . "<br>";
		}

		public function getOwner(){
			return $this->idOwner;
		}

		public function sendToDatabase(){
			Include "DatabaseConnector.php";
			$insert_Mascota = "INSERT INTO Animal (nombre, tipo, raza, fechaNacimiento, Dueno_idDueno) VALUES ('{$this->name}','{$this->type}', '{$this->breed}' , '{$this->birthdayDate}',{$this->idOwner})";
			if (mysqli_query($con, $insert_Mascota)) {
			echo "Animal Creado de manera exitosa";
			} else {
			echo "Error: " . mysqli_error($con);
			}

		
		}
	}

?>