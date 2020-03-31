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
		function insert(Profil $profil){
			try {
					$profilNom = $profil->getProfilNom();
					$sql = 'insert into profil(ProfilNom) values(?)';
					$stmt = $this->cn->prepare($sql);
					$stmt->bindParam(1, $profilNom );
					// si true, return 1
					return $stmt->execute();

			} catch (PDOException $e) {
				echo 'Erreur insertion: '. $e;
			}
		}

		function upDate(Profil $p){
			try {

					$profilNom = $p->getProfilNom();
					$ProfilID = $p->getProfilID();
					$sql = 'update profil set ProfilNom = ? where Profil_ID = ? ';
					$stmt = $this->cn->prepare($sql);
					$stmt->bindParam(1, $profilNom );
					$stmt->bindParam(2, $ProfilID);
					
					return $stmt->execute();					
			} catch (PDOException $e) {
				echo "Erro: ". $e;
			}
		}

		function delete($Profil_ID){
			try {
					$sql = 'delete from profil where Profil_ID = ? ';
					$stmt = $this->cn->prepare($sql);
					$stmt->bindParam(1, $Profil_ID);
					return $stmt->execute();					
			} catch (PDOException $e) {
				echo "Erro: ". $e;
			}
		}

		function getProfil(){

			$sql = 'select Profil_ID, ProfilNom from profil';
			$stmt = $this->cn->prepare($sql);
			$stmt->execute();
			$rs = $stmt->fetchall(PDO::FETCH_ASSOC); //pega o resutado da consulta
			 return $rs ;
		}
	}

?>