<!-- ______________________________________  BEGIN INCLUDE MODAL-AJOUTER   ______________________________________-->

<div class="modal fade ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        
        <div class="modal-header">
            <h5 class="modal-title" id="ModalTitle"></h5>
                <button type="button" 
                        class="close"
                        data-dismiss="modal" 
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
        </div>

        <div class="modal-body">
           <form id="formProfilAjouter">
                <input type="hidden" id="Profil_ID" name="Profil_ID" readonly="true" >
                    <div class="form-group">
                        <label for="ProfilNom">Nom</label>
                        <input type="text" minlength="1" maxlength="50" class="form-control" id="ProfilNom" name="ProfilNom">
                    </div>
            </form>
        </div>

        <div class="modal-footer">
            <button class="btn-success"
                    data-dismiss="modal"  
                    type="button" 
                    id="btnAjouter">
                    <i class="far fa-save"></i> Ajouter
            </button> 
            <button class="btn-danger" 
                    data-dismiss="modal"  
                    type="button" 
                    id="btnSupprimer">
                    <i class="far fa-trash-alt"></i> Supprimer
            </button>
        </div>
    </div>
  </div>
</div>

<!-- ______________________________________  END INCLUDE MODAL-AJOUTER   ______________________________________-->
