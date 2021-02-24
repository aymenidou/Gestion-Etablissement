
<div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter une Filiere</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">

            <form id="form1" name="form1" method="post" action="filiere/query.php">
                <input type="text" name="nom" id="nom" class="form-control form-control-user mb-2" placeholder="Filiere" />
                <input type="text" name="description" id="description" class="form-control form-control-user mb-2" placeholder="Description" />

        </div>
        <div class="modal-footer">
            <div class="btn-block align-content-center ">
                <button type="submit" name="ajouter" id="ajouter" value="Ajouter" class="btn  btn-primary col-sm-6 mb-3 mb-sm-0">Ajouter</button>
                <button type="reset" name="annuler" id="annuler" value="Annuler" class="btn  btn-secondary col-sm-5 mb-3  mb-sm-0">Annuler</button>
            </div>
        </div>
        </form>

    </div>
</div>