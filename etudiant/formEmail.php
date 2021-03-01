<?php
include_once '../config.php';



?>

<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Envoyer un Email</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>

        <div class="modal-body">
            <form id="form1" name="form1" method="post" action="sendEmail.php" class="align-text-center card p-4">
                
                <input type="text" name="email" id="email" class="form-control form-control-user mb-2 email" placeholder="Email" />

                
                <div class="form-group row mb-2">

                    <label for="priorite" class="col-sm-6 mb-3 mb-sm-0">Priorite :</label>
                    <select name="priorite" id="priorite" class="form-control form-control-user col-sm-6 mb-3 mb-sm-0">
                        <option value="0">Normal
                        </option>
                        <option value="1" class="text-warning">Important
                        </option>
                        <option value="2" class="text-danger">Urgent
                        </option>
                    </select>
                </div>
                <input type="text" name="sujet" id="sujet" class="form-control form-control-user mb-2" placeholder="Sujet" />
                <div class="form-group">
                    <label for="message">Message </label>
                    <textarea class="form-control" name="message" id="message" rows="6" cols="30"></textarea>
                </div>

        </div>
        <div class="modal-footer">

            <div class="btn-block align-content-center d-inline-flex">
                <button type="submit" name="envoyer" id="envoyer" value="Envoyer" class="w-50 btn btn-primary   m-2">Envoyer</button>
                <button type="reset" name="annuler" id="annuler" value="Annuler" class="w-50 btn btn-secondary m-2">Annuler</button>
            </div>
        </div>

        </form>
    </div>
</div>

