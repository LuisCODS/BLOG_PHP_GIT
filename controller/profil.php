<?php
 // --------------------------------------------------------------
 // CONTROLLEUR DU PROFIL
 //--------------------------------------------------------------- 
	include '../model/Profil.class.php';
	include '../dao/ProfilDAO.class.php';

	// Get all form field
	extract($_POST);

	//Obj GLOBAL
	$profilDAO = new ProfilDAO();	

	switch ($action) 
	{
		case 'insert':
			$newProfil = new Profil(null, $ProfilNom);		
			echo $profilDAO->insert($newProfil);//Si ok return 1
		    break;

		case 'update':
			$profil = new Profil($Profil_ID, $ProfilNom);		
			echo $profilDAO->update($profil);//Si ok return 1
			break;

		case 'delete':
			echo $profilDAO->delete($Profil_ID);//Si ok return 1
			break;

		case 'getProfil':
			echo $profilDAO->getProfil();//Si ok return 1
			break;
			
		default:
			echo "Aucun action trouvée";
			break;
	}

?>

