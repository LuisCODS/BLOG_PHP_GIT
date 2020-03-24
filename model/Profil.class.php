<?php

	Class Profil() 
	{

		private $PK_ProfilID;
		private $ProfilNom;

		function __Construct($PK_ProfilID,$ProfilNom)
		{
			$this->$PK_ProfilID = $PK_ProfilID;
			$this->$ProfilNom 	= $ProfilNom;
		}

		function getProfilID(){
			return $this->$PK_ProfilID;
		}
		function setProfilID($PK_ProfilID){
			 $this->$PK_ProfilID = $PK_ProfilID;
		}
		function getProfilNom(){
			return $this->$ProfilNom;
		}
		function setProfilNom($ProfilNom){
			 $this->$ProfilNom = $ProfilNom;
		}







	}

?>