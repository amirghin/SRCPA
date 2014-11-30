<?php

	class Expedient{

		private $pet = ""; //Type Pet
		private $owner = ""; //Type Owner
		private $idExpedient = "";
		private $conditions = "";
		private $currentMedications = "";
		private $nextAppointment = ""; //Type appointment
		private $historicalAppointment = array(); //Type appointment

		public function __construct(){

		}	

		public function viewExpedient() {

		}

		public function toString(){

		}


		public function setPet($pet){
			$this->pet = $pet; 
		}

		public function setOwner($owner){
			$this->owner = $owner;
		}

		public function setIdExpedient($idExp){
			$this->idExpedient  = $idExp;
		}

		public function setConditions($con){
			$this->conditions = $con;
		}

		public function setCurrentMedications($currentMeds){
			$this->currentMedications = $currentMeds;
		}

		public function setNextAppointment(nextApp){
			$this->nextAppointment = $nextApp;
		}

		public function setHistoricalAppointment($histoApp){
			$this->historicalAppointment = $histoApp;
		}

		public function getPet(){
			return $this->pet;
		}

		public function getOwner(){
			return $this->owner;
		}

		public function getIdExpedient(){
			return $this->idExpedient;
		}

		public function getConditions(){
			return $this->conditions;
		}

		public function getCurrentMedications(){
			return $this->currentMedications;
		}

		public function getNextAppointment(){
			return $this->nextAppointment;
		}

		public function getHistoricalAppointment(){
			return $this->historicalAppointment;
		}

}

?>