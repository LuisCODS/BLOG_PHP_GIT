<?php
include'../includes/Connection.class.php';

	Class CategorieDAO 
	{

		private $cn;

		function __Construct()
		{
			$pdo = new Connection();
			$this->cn = $pdo->getConnection();
		}

	// ______________________________ CDRUD ___________________________
		function insert(Categorie $cat)
		{
			try {
					$NomCategorie = $cat->getNomCategorie();
					$sql 		  = 'insert into categorie(NomCategorie) values(?)';
					$stmt 		  = $this->cn->prepare($sql);
					
					$stmt->bindParam(1, $NomCategorie );
					return $stmt->execute();
			} catch (PDOException $e) {
				echo 'Erro: '. $e;
			}
		}

		function upDate(Categorie $cat)
		{
			try {

				$nomCategorie = $cat->getNomCategorie();
				$categorieID  = $cat->getCategorieID();

				$sql = 'update categorie set NomCategorie = ? 
						where Categorie_ID = ? ';
				$stmt = $this->cn->prepare($sql);

				$stmt->bindParam(1, $nomCategorie );
				$stmt->bindParam(2, $categorieID);
				
				return $stmt->execute();
									
			} catch (PDOException $e) {
				echo "Erro: ". $e;
			}
		}

		function delete($Categorie_ID)
		{
			try {
					$sql = 'delete from categorie where Categorie_ID = ? ';
					$stmt = $this->cn->prepare($sql);
					$stmt->bindParam(1, $Categorie_ID);
					return $stmt->execute();					
			} catch (PDOException $e) {
				echo "Erro: ". $e;
			}
		}

		function getCategorie()
		{
			$sql = 'select Categorie_ID, NomCategorie  from categorie';
			$stmt = $this->cn->prepare($sql);
			$stmt->execute();
			//pega o resutado da consulta
			$rs = $stmt->fetchall(PDO::FETCH_ASSOC); 
 			//Retourn un array en json,car HTML(browser) only ready string.
			 return json_encode($rs);
		}
	}

?>