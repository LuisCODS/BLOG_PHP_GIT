<!--  --------------------------------------------------------------------
  CETTE PAGE ...
 --------------------------------------------------------------------- -->

<!--  Get form inputs field -->
<?php extract($_POST); ?>
 
<?php foreach( json_decode($obj) as $list) { ?>						  
  <option value="<?php echo $list->Profil_ID;?>"> <?php echo $list->ProfilNom; ?> </option>  		
<?php } ?>	




