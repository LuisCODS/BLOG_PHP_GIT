<?php
	Class Connection
	{
		private $cn;

		function getConnection()
		{
			try	{
				  $this->cn = new PDO('mysql:host=localhost;dbname=blogphp','root','');
				  $this->cn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			} 
			catch(PDOException $e){
			    // echo $e->getMessage();
				echo 'Probleme de connexion au serveur de bd '.$e;
				//exit();
			}
			return $this->cn;
		}
		
	}//FIN CLASS


		//to test connection erro
		// $pdo = new Connection();
		// $cn = $pdo->getConnection();

		// $stmt = $cn->prepare('select * from utilisateur');
		// $stmt->execute();

		// $rs = $stmt->fetchall(PDO::FETCH_ASSOC);

		// foreach ($rs as $row){
		// 	echo $row["UtilisateurNickName"];
		// }

?>