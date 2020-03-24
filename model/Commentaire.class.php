<?php

	Class Commentaire() 
	{

		private $PK_CommentaireID;
		private $FK_PostID;
		private $Commentaire;
		private $DateDebut;

		function __Construct($PK_CommentaireID,$FK_PostID,$Commentaire,$DateDebut)
		{
			$this->$PK_CommentaireID  = $PK_CommentaireID;
			$this->$FK_PostID   	  = $FK_PostID;
			$this->$Commentaire	      = $Commentaire;
			$this->$DateDebut  		  = $DateDebut;
		}

		function getPK_CommentaireID(){
			return $this->$PK_CommentaireID;
		}
		function setPK_CommentaireID($PK_CommentaireID){
			 $this->$PK_CommentaireID = $PK_CommentaireID;
		}
		function getPostID(){
			return $this->$FK_PostID;
		}
		function setPostID($FK_PostID){
			 $this->$FK_PostID = $FK_PostID;
		}
		function getCommentaire(){
			return $this->$Commentaire;
		}
		function setCommentaire($Commentaire){
			 $this->$Commentaire = $Commentaire;
		}
		function getDateDebut(){
			return $this->$DateDebut;
		}
		function setDateDebut($DateDebut){
			 $this->$DateDebut = $DateDebut;
		}


	}

?>