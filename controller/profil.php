<?php
	include '../model/Profil.class.php';
	include '../dao/ProfilDAO.class.php';
	// GET DATA FROM FORM
	extract($_POST);

	switch ($action) 
	{
		case 'insert':
				$profil    = new Profil(null, $ProfilNom);
				$profilDAO = new ProfilDAO();			
				$profilDAO->insert($profil);
				echo"Insertion done";
			break;
		case 'update':
			echo "Données mis à jour ";
			break;
		case 'delete':
			echo "delete ";
			break;
		default:
			echo "none";
			break;
	}

?>

