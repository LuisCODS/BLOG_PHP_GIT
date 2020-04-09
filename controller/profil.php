<?php
 // --------------------------------------------------------------
 // PAGE QUI TRAITE LES REQUISITIONS ASSINCRONE AJAX 
 // ...PROVENANT DU (moduleScript.js)
 //--------------------------------------------------------------- 
	include '../model/Profil.class.php';
	include '../dao/ProfilDAO.class.php';

	// Get all form field
	extract($_POST);
	$profilDAO = new ProfilDAO();

	

	switch ($action) 
	{
		case 'insert':
			$profil    = new Profil(null, $ProfilNom);		
			$profilDAO->insert($profil);//return:1
		    break;

		case 'update':
			$profil    = new Profil($Profil_ID, $ProfilNom);		
			$profilDAO->update($profil);//return:1
			break;

		case 'delete':
			echo "delete ";
			break;

		case 'getProfil':
			echo $profilDAO->getProfil();
			break;
			
		default:
			echo "none";
			break;
	}

?>

