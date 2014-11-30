<?php

	class HistoricalExpedient{
		private $idHistoricalExpedient = 0;
		private $illness = "";
		private $medication = "";
		private $expedient = ""; //Type of Expedient
		private $appointment = ""; //Type of Appointment

		function __construct($idHistoExp, $ill, $med, &$exp, &$app){
			$this->idHistoricalExpedient = $idHistoExp;
			$this->illness = $ill;
			$this->medication = $med;
			$this->expedient = &$exp;
			$this->app = &$app;
		}

		function viewHistorical(){

		}

		function deleteHistorical(){

		}
	}

?>