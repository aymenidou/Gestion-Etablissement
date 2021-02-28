<?php
include_once '../config.php';

// $sql = 'select * from groupe';
// $stmt = $bdd->prepare($sql);
// $stmt->execute();
// $groupe = $stmt->fetchAll();

?>
<style>
    /* #list-groupe {
        display: none;
    } */
</style>
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
                <!-- <div class="form-group mb-2">
                    <label for="type">Type</label>
                    <input type="radio" name="type" value="individu" id="type_0" class="" checked /><i class="ml-1 fa fa-user" aria-hidden="true"></i> Individu
                    <input type="radio" name="type" value="groupe" id="type_1" class="" /><i class="ml-1 fa fa-users" aria-hidden="true"></i> Groupe
                </div> -->
                <input type="text" name="email" id="email" class="form-control form-control-user mb-2 email" placeholder="Email" />

                <?php
                // echo '<div class="form-group row mb-2 " id="list-groupe" >
                //             <label for="groupe" class="col-sm-6 mb-3 mb-sm-0">Groupe :</label>
                //             <select name="groupe" id="groupe" class="form-control form-control-user col-sm-6 mb-3 mb-sm-0" placeholder="groupe">';
                // for ($i = 0; $i < count($groupe); $i++) {

                //     echo ' <option value=' .  $groupe[$i]['id'] . '>' .  $groupe[$i]['nom'] . '</option>';
                // }
                // echo '</select></div>';

                ?>
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

<script>
    // let groupe = document.getElementById("list-groupe");
    // let email = document.getElementById("email");
    // let type = document.getElementsByName("type");

    // function hide() {
    //     groupe.style.display = 'none';
    //     email.style.display = 'none';
    // }

    // var radios = document.forms["form1"].elements["type"];
    // for (var i = 0, max = radios.length; i < max; i++) {
    //     radios[i].onclick = function() {
    //         switch (this.value) {
    //             case "individu":
    //                 hide();
    //                 email.style.display = 'flex';
    //                 break;
    //             case "groupe":
    //                 hide();
    //                 groupe.style.display = 'flex';
    //                 break;
    //         }
    //     }
    // }
</script>