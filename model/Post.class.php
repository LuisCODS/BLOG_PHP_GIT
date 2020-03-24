<?php

	Class Post() 
	{

		private $PK_PostID;
		private $FK_CategorieID;
		private $Title;
		private $Resume;
		private $Contenu;
		private $DateDebut;
		private $DateFin;

		function __Construct($PK_PostID,$FK_CategorieID,$Title,$Resume,$Contenu,$DateDebut,$DateFin)
		{
			$this->$PK_PostID 		= $PK_PostID;
			$this->$FK_CategorieID  = $FK_CategorieID;
			$this->$Title 	    	= $Title;
			$this->$Resume 	   	    = $Resume;
			$this->$Contenu 	   	= $Contenu;
			$this->$DateDebut 	  	= $DateDebut;
			$this->$DateFin	  	    = $DateFin;
		}

		function getPostID(){
			return $this->$PK_PostID;
		}
		function setPostID($PK_PostID){
			 $this->$PK_PostID = $PK_PostID;
		}
		function getCategorieID(){
			return $this->$FK_CategorieID;
		}
		function setCategorieID($FK_CategorieID){
			 $this->$FK_CategorieID = $FK_CategorieID;
		}
		function getTitle(){
			return $this->$Title;
		}
		function setTitle($Title){
			 $this->$Title = $Title;
		}
		function getResume(){
			return $this->$Resume;
		}
		function setResume($Resume){
			 $this->$Resume = $Resume;
		}
		function getContenu(){
			return $this->$Contenu;
		}
		function setContenu($Contenu){
			 $this->$Contenu = $Contenu;
		}
		function getDateDebut(){
			return $this->$DateDebut;
		}
		function setDateDebut($DateDebut){
			 $this->$DateDebut = $DateDebut;
		}
		function getDateFin(){
			return $this->$DateFin;
		}
		function setDateFin($DateFin){
			 $this->$ = $DateFin;
		}
	}

?>