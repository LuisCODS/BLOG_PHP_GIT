<!--  HEAD  -->  
<?php include '../../includes/head.php'; ?> 


<!-- _________________ RENDER PAGE -  _________________-->

<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-11">
           <h2><i class="far fa-edit"></i> Post</h2> 
        </div>   
        <div class="col-md-1">
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".ModalCadastro"><i class="fas fa-plus"></i> </button>
        </div>        
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Titre</th>
                        <th>Categorie</th>
                        <th>Resume</th>
                        <th>Contenu</th>
                        <th>Date debut</th>
                        <th>Date fin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Coronavirus</td>
                        <td>Sante</td>
                        <td>texte ici...</td>
                        <td>texte ici...</td>
                        <td>22/02/2020</td>
                        <td>22/03/2020</td>
                        <td><button type="button" class="btn btn-dark"><i class="fas fa-user-edit"></i> Editer</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> 
<!-- __________________________ FIN RENDER PAGE ________________________-->






<!--  MODAL: POUR LE BUTTON -->
<?php include 'includes/ajouter.php'; ?>

<!--  - LAYOUT -->
<?php include '../../includes/footer.php'; ?>
