<!--  HEAD  -->  
<?php include '../../includes/head.php'; ?> 

<!-- _________________ RENDER PAGE - UTILISATEUR ICI _________________-->

<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-11">
           <h2><i class="fas fa-users"></i> Utilisateurs</h2> 
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
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Maria</td>
                        <td>Otto@gmail.com</td>
                        <td><button type="button" class="btn btn-dark"><i class="fas fa-user-edit"></i> Editer</button></td>
                    </tr>
                    <tr>
                        <td>Joao</td>
                        <td>Joao@gmail.com</td>
                        <td><button type="button" class="btn btn-dark"><i class="fas fa-user-edit"></i> Editer</button></td>
                    </tr>
                    <tr>
                        <td>ben</td>
                        <td>ben@gmail.com</td>
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
