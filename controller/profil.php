<?php
 // --------------------------------------------------------------
 // CETTE PAGE TRAITE LES REQUISITIONS ASSINCRONE AJAX 
 // ...PROVENANT DU (moduleScript.js)
 //--------------------------------------------------------------- 
	include '../model/Profil.class.php';
	include '../dao/ProfilDAO.class.php';

	// Get all form field
	extract($_POST);


	switch ($action) 
	{
		case 'insert':
			$profil    = new Profil(null, $ProfilNom);
			$profilDAO = new ProfilDAO();						
		    $profilDAO->insert($profil);//return:1
		   // echo "Profil inserré avec sucess! ";
		    break;

		case 'update':
			echo "Données mis à jour ";
			break;

		case 'delete':
			echo "delete ";
			break;

		case 'getProfil':
			$profilDAO = new ProfilDAO();	
			echo $profilDAO->getProfil();
			break;
			
		default:
			echo "none";
			break;
	}

?>

