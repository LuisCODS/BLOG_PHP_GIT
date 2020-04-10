<?php
 // --------------------------------------------------------------
 // CONTROLLEUR
 //--------------------------------------------------------------- 
	include '../model/Profil.class.php';
	include '../dao/ProfilDAO.class.php';

	// Get all form field
	extract($_POST);
	//GLOBAL
	$profilDAO = new ProfilDAO();

	

	switch ($action) 
	{
		case 'insert':
			$newProfil = new Profil(null, $ProfilNom);		
			$profilDAO->insert($newProfil);//return:1
		    break;

		case 'update':
			$profil = new Profil($Profil_ID, $ProfilNom);		
			$profilDAO->update($profil);
			break;

		case 'delete':
			$profilDAO->delete($Profil_ID);
			break;

		case 'getProfil':
			echo $profilDAO->getProfil();
			break;
			
		default:
			echo "none";
			break;
	}

?>

