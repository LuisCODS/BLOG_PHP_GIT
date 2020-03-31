<!-- ______________________________________  BEGIN INCLUDE MODAL-AJOUTER   ______________________________________-->

<div class="modal fade ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Nouveau profil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           <form id="formProfilAjouter">
                <div class="form-group">
                    <label for="ProfilNom">Nom</label>
                    <input type="text" maxlength="50" class="form-control" id="ProfilNom" name="ProfilNom">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" id="btnAjouter" class="btn btn-success"><i class="far fa-save"></i> Ajouter</button>
        </div>
    </div>
  </div>
</div>
<!-- ______________________________________  END INCLUDE MODAL-AJOUTER   ______________________________________-->
