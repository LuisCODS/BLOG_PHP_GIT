<!--
 ____________________________________________________________________
  CETTE PAGE RECOIT LA  REQUISITION ASSINCRONE AJAX (moduleScript.js) 
 ... POUR AFFICHER UNE LIST DE CATEGORIE.
 ____________________________________________________________________
 -->

<!--recupere la variable obj(tableau json de la  categorie) 
du callback(moduleScript.js)  -->

<?php extract($_POST);?>

<table class="table table-hover">
	<thead class="thead-dark">
	    <tr>
	        <th>Titre</th>
	        <th>Action</th>
	    </tr>
	</thead>
	<tbody>	 
		<?php foreach(json_decode($obj) as $list) { ?>			
		    <tr>
		        <td><?php echo $list->NomCategorie; ?></td>
		        <td>
		        	<button type="button" 
		        			class="btn btn-dark btnEditer" 
		        			obj='<?php echo json_encode($list); ?>'>
		        			<i class="fas fa-user-edit"></i>
		        		 Editer
		       		 </button>
		        </td>
		    </tr>
	</tbody>
</table>
	<?php } ?>
	


