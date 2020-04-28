<?php
include'../includes/Connection.class.php';

	Class PostDAO 
	{

		private $cn;

		function __Construct()
		{
			$pdo = new Connection();
			$this->cn = $pdo->getConnection();
		}

	// ______________________________ CDRUD ___________________________
		function insert(Post $post)
		{
			try {
					$Categorie_ID = $post->getCategorieID();
					$Title 		  = $post->getTitle();
					$Resume 	  = $post->getResume();
					$Contenu 	  = $post->getContenu();
					$DateDebut 	  = $post->getDateDebut();
					$DateFin 	  = $post->getDateFin();

					$sql = 'insert into post (Categorie_ID,Title,Resume,Contenu,DateDebut,DateFin) 
							values(?,?,?,?,?,?)';

					$stmt = $this->cn->prepare($sql);

					$stmt->bindParam(1, $Categorie_ID);
					$stmt->bindParam(2, $Title);
					$stmt->bindParam(3, $Resume);
					$stmt->bindParam(4, $Contenu);
					$stmt->bindParam(5, $DateDebut);
					$stmt->bindParam(6, $DateFin );

					return $stmt->execute();

			} catch (PDOException $e) {
				echo 'Erro: '. $e;
			}
		}

		function upDate(Post $post)
		{
			try {
					$Categorie_ID = $post->getCategorieID();
					$Title 		  = $post->getTitle();
					$Resume 	  = $post->getResume();
					$Contenu 	  = $post->getContenu();
					$DateDebut 	  = $post->getDateDebut();
					$DateFin 	  = $post->getDateFin();
					$Post_ID	  = $post->getPostID();

					$sql =  'update post set
						     Categorie_ID = ?,
						     Title = ?, 
						     Resume = ?,
						     Contenu = ?,
						     DateDebut = ?,
						     DateFin = ?,
						     Post_ID = ? 
						     where Post_ID = ? ';

					$stmt = $this->cn->prepare($sql);

					$stmt->bindParam(1, $Categorie_ID);
					$stmt->bindParam(2, $Title);
					$stmt->bindParam(3, $Resume);
					$stmt->bindParam(4, $Contenu);
					$stmt->bindParam(5, $DateDebut);
					$stmt->bindParam(6, $DateFin );
					$stmt->bindParam(7, $Post_ID );

					return $stmt->execute();

			} catch (PDOException $e) {
				echo "Erro: ". $eCommentaire;
			}
		}

		function delete($Post_ID)
		{
			try {
					$sql = 'delete from post where Post_ID = ? ';
					$stmt = $this->cn->prepare($sql);
					$stmt->bindParam(1, $Post_ID);
					return $stmt->execute();					
			} catch (PDOException $e) {
				echo "Erro: ". $e;
			}
		}

		function getPost()
		{
			$sql = 'select
					 Post_ID, 
					 Categorie_ID, 
					 Title, 
					 Resume,
					 Contenu, 
					 DateDebut,
					 DateFin 
					 from post';
					 
			$stmt = $this->cn->prepare($sql);
			$stmt->execute();
			//pega o resutado da consulta
			$rs = $stmt->fetchall(PDO::FETCH_ASSOC); 
  			//Retourn un array en json,car HTML(browser) only ready string.
			 return json_encode($rs);
		}
	}

?>