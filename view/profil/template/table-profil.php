<!--  
--------------------------------------------------------------
  CETTE PAGE RECOIT LA  REQUISITION ASSINCRONE AJAX PROVENANT DU 
  ... SCRIPT DU MODULE(moduleScript.js)
 --------------------------------------------------------------- 
-->
<?php

extract($_POST);


try {
	 $someObject = json_decode($obj);
	   //Parcour un array d'objet déjà decodé
		//Parm:decodes a JSON string into a PHP objet
	   foreach( someObject as $profil){
		  echo $profil[0]->ProfilNom ."</br>";
	   }
	}catch (Exception $e) {
		 echo $e->getMessage();
	}



?>