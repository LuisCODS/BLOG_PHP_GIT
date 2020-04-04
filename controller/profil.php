<!--  --------------------------------------------------------------
  CETTE PAGE RECOIT LES REQUISITION AJAX PROVENANT DU SCRIPT DU 
  ... MODULE(moduleScript.js)
 --------------------------------------------------------------- -->

<?php
	include '../model/Profil.class.php';
	include '../dao/ProfilDAO.class.php';

	// RECUPERE TOUS LES VALEURS DES CHAMPS DU FORMULAIRE
	extract($_POST);

	//$profilDAO = new ProfilDAO();

	switch ($action) 
	{
		case 'insert':
				$profil    = new Profil(null, $ProfilNom);
				$profilDAO = new ProfilDAO();			
				echo $profilDAO->insert($profil);
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

