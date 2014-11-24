<?php

	class Owner{
		private $idOwner = 0;
		private $name = "";
		private $phone = "";
		private $email = "";
		private $cedula = "";

		public function __construct(){

		}

		public function setIdOwner($id){
			$this->idOwner = $id;
		}

		public function setName($name){
			$this->name = $name;
		}

		public function setPhone($phone){
			$this->phone = $phone;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function setCedula($cedula){
			$this->cedula = $cedula;
		}

		public function getIdOwner(){
			return $this->idOwner;
		}

		public function getName(){
			return $this->name;
		}

		public function getPhone(){
			return $this->phone;
		}

		public function getEmail(){
			return $this->email;
		}

		public function getCedula(){
			return $this->cedula;
		}

	}

?>