<?php
include'../includes/Connection.class.php';

	Class UtilisateurDAO 
	{

		private $cn;

		function __Construct()
		{
			$pdo = new Connection();
			$this->cn = $pdo->getConnection();
		}

	// ______________________________ CDRUD ___________________________
		function insert(Utilisateur $user)
		{
			try {
					$Profil_ID 		 	  = $user->getProfilID();
					$UtilisateurName 	  = $user->getUtilisateurName();
					$UtilisateurNickName  = $user->getUtilisateurNickName();
					$UtilisateurMDP 	  = $user->getUtilisateurMDP();
					$UtilisateurEmail 	  = $user->getUtilisateurEmail();

					$sql = 'insert into utilisateur 
							(Profil_ID,
							 UtilisateurName,
							 UtilisateurNickName,
							 UtilisateurMDP,
							 UtilisateurEmail)
							 values(?,?,?,?,?,?)';

					$stmt = $this->cn->prepare($sql);

					$stmt->bindParam(1, $Profil_ID);
					$stmt->bindParam(2, $UtilisateurName);
					$stmt->bindParam(3, $UtilisateurNickName);
					$stmt->bindParam(4, $UtilisateurMDP);
					$stmt->bindParam(5, $UtilisateurEmail );

					return $stmt->execute();

			} catch (PDOException $e) {
				echo 'Erro: '. $e;
			}
		}

		function upDate(Utilisateur $user)
		{
			try {
					
					$Profil_ID 		 	  = $user->getProfilID();
					$UtilisateurName 	  = $user->getUtilisateurName();
					$UtilisateurNickName  = $user->getUtilisateurNickName();
					$UtilisateurMDP 	  = $user->getUtilisateurMDP();
					$UtilisateurEmail 	  = $user->getUtilisateurEmail();
					$Utilisateur_ID  	  = $user->getUtilisateurID();

				   $sql =  'update utilisateur set
							Profil_ID = ?,
							UtilisateurName = ?,
							UtilisateurNickName = ?,
							UtilisateurMDP = ?,
							UtilisateurEmail = ?,
							Utilisateur_ID = ?
							where Utilisateur_ID = ?';

					$stmt = $this->cn->prepare($sql);

					$stmt->bindParam(1, $Profil_ID);
					$stmt->bindParam(2, $UtilisateurName);
					$stmt->bindParam(3, $UtilisateurNickName);
					$stmt->bindParam(4, $UtilisateurMDP);
					$stmt->bindParam(5, $UtilisateurEmail);
					$stmt->bindParam(6, $Utilisateur_ID);

					return $stmt->execute();

			} catch (PDOException $e) {
				echo "Erro: ". $eCommentaire;
			}
		}

		function delete($Utilisateur_ID)
		{
			try {
					$sql = 'delete from utilisateur 
							where Utilisateur_ID = ? ';
					$stmt = $this->cn->prepare($sql);
					$stmt->bindParam(1, $Post_ID);
					return $stmt->execute();					
			} catch (PDOException $e) {
				echo "Erro: ". $e;
			}
		}

		function getUtilisateur()
		{
			$sql = 'select
					Utilisateur_ID, 
					Profil_ID,
					UtilisateurName, 
				    UtilisateurNickName,
				    UtilisateurMDP,
				    UtilisateurEmail
				    from utilisateur';

			$stmt = $this->cn->prepare($sql);
			$stmt->execute();
			//pega o resutado da consulta
			$rs = $stmt->fetchall(PDO::FETCH_ASSOC); 
			 return $rs ;
		}







		
	}

?>