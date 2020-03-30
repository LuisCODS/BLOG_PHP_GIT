<?php
// EXTRAIT TOUT LES DONNÉS QUI PROVIENT DU POST
extract($_POST);

switch ($action) 
{
	case 'insert':
		echo "inserir information ";
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

//echo $ProfilNom;

?>

