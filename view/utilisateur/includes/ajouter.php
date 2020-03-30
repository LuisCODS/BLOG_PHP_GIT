<div class="modal fade ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Nouveau utilisateur</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           <form>
                <div class="form-group">
                    <label for=""UtilisateurName>Nom</label>
                    <input type="text" class="form-control" id="UtilisateurName" name="UtilisateurName">
                </div>
                <div class="form-group">
                    <label for=""UtilisateurNickName>Utilisateur</label>
                    <input type="text" class="form-control" id="UtilisateurNickName" name="UtilisateurNickName">
                </div>
                <div class="form-group">
                    <label for="UtilisateurMDP">Mot de passe</label>
                    <input type="password" class="form-control" id="UtilisateurMDP" name="UtilisateurMDP" autocomplete="on">
                </div>
                <div class="form-group">
                    <label for="UtilisateurEmail">Email</label>
                    <input type="email" class="form-control" id="UtilisateurEmail" name="UtilisateurEmail">
                </div>
                <div class="form-group">
                    <label for="FK_ProfilID">Profil</label>
                    <select class="form-control" id="FK_ProfilID" name="FK_ProfilID">
                        <option value="">Selection</option>
                        <option value="1">Admin</option>
                        <option value="2">Lecteur</option>
                    </select>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success"><i class="far fa-save"></i> Ajouter</button>
        </div>
    </div>
  </div>
</div>