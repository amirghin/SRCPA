<?php

	class Appoitment{
		private $idAppoitment = 0;
		private $date  = "";
		private $time ="";
		private $appointmentType = "";

		public function __construct($idApp, $date, $time, $appointmentType){
			$this->idAppoitment = $idApp;
			$this->date = $date;
			$this->time = $time;
			$this->appointmentType = $appointmentType;
		}

	}

?>