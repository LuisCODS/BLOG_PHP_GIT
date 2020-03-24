<div class="modal fade ModalCadastro" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Nouveau post</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
           <form>
                <div class="form-group">
                    <label for=""Title>Title</label>
                    <input type="text" class="form-control" id="Title" name="Title">
                </div>
                <div class="form-group">
                     <label for="Contenu">Resume</label>
                     <textarea class="form-control" id="Resume" name="Resume" rows="3"></textarea>
                </div>
                <div class="form-group">
                     <label for="Contenu">Contenu</label>
                     <textarea class="form-control" id="Contenu" name="Contenu" rows="3"></textarea>
                </div>

                <div class="container">
                      <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                     <label for="DateDebut">Date debut</label>
                                     <input type="Date" class="form-control" id="DateDebut" name="DateDebut">
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="DateFin">Date fin</label>
                                    <input type="Date" class="form-control" id="DateFin" name="DateFin">
                                 </div> 
                            </div>
                      </div>
                </div>

                <div class="form-group">
                    <label for="FK_CategorieID">Categorie</label>
                    <select class="form-control" id="FK_CategorieID" name="FK_CategorieID">
                        <option value="">Selection</option>
                        <option value="1">Cat 1</option>
                        <option value="2">Cat 2</option>
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