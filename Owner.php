<?php

	class Owner{
		private $idOwner = 0;
		private $name = "";
		private $lastName = "";
		private $phone = "";
		private $email = "";
		private $cedula = "";

		public function __construct($n, $ln, $p, $e, $c){
			$this->name = $n;
			$this->lastName = $ln;
			$this->phone = $p;
			$this->email = $e;
			$this->cedula = $c;

		}

		public function setIdOwner($id){
			$this->idOwner = $id;
		}

		public function setName($name){
			$this->name = $name;
		}

		public function setLasName($lastName){
			$this->lastName = $lastName;
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

		public function __toString(){
			return $this;
		}

	}

?>