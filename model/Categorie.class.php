<?php

	Class Categorie() 
	{

		private $CategorieID;
		private $NomCategorie;

		function __Construct($CategorieID,$NomCategorie)
		{
			$this->$CategorieID = $CategorieID;
			$this->$NomCategorie   = $NomCategorie;
		}

		function getCategorieID(){
			return $this->$CategorieID;
		}
		function setCategorieID($CategorieID){
			 $this->$CategorieID = $CategorieID;
		}
		function getNomCategorie(){
			return $this->$NomCategorie;
		}
		function setNomCategorie($NomCategorie){
			 $this->$NomCategorie = $NomCategorie;
		}


	}

?>