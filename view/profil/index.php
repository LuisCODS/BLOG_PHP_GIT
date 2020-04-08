<?php include '../../includes/head.php'; ?> 

<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-11">
           <h2><i class="far fa-address-card"></i> Profils</h2> 
        </div>   
        <div class="col-md-1">
        <!--ici, c'est le (data-target=".ModalCadastro) que accionne le fichier ajouter.php pour le modal -->    
       <button type="button" class="btn btn-primary" data-toggle="modal" 
                    data-target=".ModalCadastro"><i class="fas fa-plus"></i> </button>
        </div>        
    </div>
    <div class="row">
        <div class="col-md-12" id="listTemplate">
           <!-- CHARGE LE TEMPLATE ICI !-->
        </div>
    </div>
</div> 


<?php include 'includes/ajouter.php'; ?>

<?php include '../../includes/footer.php'; ?>
