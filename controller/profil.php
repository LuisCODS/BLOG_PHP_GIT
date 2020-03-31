<?php
include '../model/Profil.class.php';
include '../dao/ProfilDAO.class.php';
// EXTRAIT TOUT LES DONNÉS QUI PROVIENT DU POST
extract($_POST);

echo $ProfilNom;


// switch ($action) 
// {
// 	case 'insert':
// 			$profil    = new Profil(null, $ProfilNom);
// 			$profilDAO = new ProfilDAO();
			
// 			echo $profilDAO->insert($profil);
// 		break;
// 	case 'update':
// 		echo "Données mis à jour ";
// 		break;
// 	case 'delete':
// 		echo "delete ";
// 		break;
// 	default:
// 		echo "none";
// 		break;
// }



?>

