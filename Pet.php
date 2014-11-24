<?php
	include("Owner.php"); //Including Owner Class to allow use of aggregation

	class Pet{
		private $idPet;
		private $name;
		private $type;
		private $breed;
		private $birthdayDate;
		//private $owner  //aggregation from owner, need to be initialized

		public function __construct(){

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
			return $this->name;
		}


		public function getType(){
			return $this->type;
		}

		public function getBreed(){
			return $this->breed;
		}

		public function getBirthdayDate(){
			return $this->birthdayDate;
		}
	}

?>