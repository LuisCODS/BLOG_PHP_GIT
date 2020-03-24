<?php

	Class Utilisateur 
	{

		private $PK_UtilisateurID;
		private $FK_ProfilID;
		private $UtilisateurName;
		private $UtilisateurNickName;
		private $UtilisateurMDP;
		private $UtilisateurEmail;

		function __Construct($PK_UtilisateurID,$FK_ProfilID,$UtilisateurName,$UtilisateurNickName,$UtilisateurMDP,$UtilisateurEmail)
		{
			$this->$PK_UtilisateurID 	 = $PK_UtilisateurID;
			$this->$FK_ProfilID 	     = $FK_ProfilID;
			$this->$UtilisateurName	     = $UtilisateurName;
			$this->$UtilisateurNickName  = $UtilisateurNickName;
			$this->$UtilisateurMDP		 = $UtilisateurMDP;
			$this->$UtilisateurEmail	 = $UtilisateurEmail;
		}

		function getUtilisateurID(){
			return $this->$PK_UtilisateurID;
		}
		function setUtilisateurID($PK_UtilisateurID){
			 $this->$PK_UtilisateurID = $PK_UtilisateurID;
		}

	}

?>