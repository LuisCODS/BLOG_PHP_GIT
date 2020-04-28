<!--  --------------------------------------------------------------------
  CETTE PAGE ...
 --------------------------------------------------------------------- -->

<!--  Get form inputs field -->
<?php extract($_POST); ?>
 
<?php foreach( json_decode($obj) as $list) { ?>						  
  <option value="<?php echo $list->UtilisateurName;?>"> <?php echo $list->UtilisateurName; ?> </option>  		
<?php } ?>	




