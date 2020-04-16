<?php
include'../includes/Connection.class.php';

	Class ProfilDAO 
	{

		private $cn;

		function __Construct()
		{
			$pdo = new Connection();
			$this->cn = $pdo->getConnection();
		}

	// ______________________________ CDRUD ___________________________

		//AJOUTER
		function insert(Profil $profil)
		{
			try {
					$profilNom = $profil->getProfilNom();
					$sql = 'insert into profil(ProfilNom) values(?)';
					$stmt = $this->cn->prepare($sql);
					$stmt->bindParam(1, $profilNom);
					return $stmt->execute();//Return true/False	
			} catch (PDOException $e) {
				echo 'Erreur insertion: '. $e;
			}
		}

		function update(Profil $p)
		{
			try {
					$profilNom = $p->getProfilNom();
					$ProfilID = $p->getProfilID();
					$sql = 'update profil set ProfilNom = ? where Profil_ID = ? ';
					$stmt = $this->cn->prepare($sql);
					$stmt->bindParam(1, $profilNom );
					$stmt->bindParam(2, $ProfilID);					
					return $stmt->execute();//Return true/False						
				} catch (PDOException $e) {
					echo "Erro: ". $e;
				}
		}

		function delete($Profil_ID)
		{
			try {
					$sql = 'delete from profil where Profil_ID = ? ';
					$stmt = $this->cn->prepare($sql);
					$stmt->bindParam(1, $Profil_ID);					
					return $stmt->execute();//Return true/False					
			} catch (PDOException $e) {
				echo "Erro: ". $e;
			}
		}

		//Méthode qui fait une SELECT de 2 champs dans la BD.
		//Retour: un tableau en format json.
		function getProfil()
		{
			$sql = 'select Profil_ID, ProfilNom from profil';
			$stmt = $this->cn->prepare($sql);
			$stmt->execute();//Return true/False	
			// Contient un array de Profil
			$tableau = $stmt->fetchall(PDO::FETCH_ASSOC); 
			//Retourn un array  en json,car HTML(browser) only ready string.
			 return json_encode($tableau);
		}
	}

?>