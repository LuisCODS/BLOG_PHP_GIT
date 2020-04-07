<?php
// --------------------------------------------------------------
 // CETTE PAGE RECOIT LA  REQUISITION ASSINCRONE AJAX PROVENANT DU 
 // ... SCRIPT DU MODULE(moduleScript.js)
 //--------------------------------------------------------------- -->
extract($_POST);

   //Parcour un array d'objet déjà decodé
	//Parm:decodes a JSON string into a PHP objet
   foreach( json_decode($obj) as $profil){
	  echo $profil->ProfilNom ."</br>";
   }

?>