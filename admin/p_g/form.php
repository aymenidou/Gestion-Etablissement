<?php
$sqlm = "select * from matiere";
$sqlpg = "select * from prof_groupe pg inner join professeur p where pg.groupe = '$idgroupe' and pg.professeur = p.id";
// $sqlp = "select p.nom,p.prenom,m.nom from professeur p inner join matiere m where m.id = p.matiere";
$sqlp = "select * from professeur";
$stmt = $bdd->query($sqlm);
$mat = $stmt->fetchAll();
$stmt = $bdd->query($sqlpg);
$pg = $stmt->fetchAll();
$stmt = $bdd->query($sqlp);
$prof = $stmt->fetchAll();


?>

<div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Liste des professeurs du groupe </h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form name="form1" method="post" action="p_g/query.php">
        <input value="<?php echo $idgroupe;?>" hidden name="groupe">
            <div class="modal-body">
                <!-- <input type="text" hidden value="4" name="groupe"> -->
                <table class="table-striped table-bordered text-center w-100">
                    <thead>
                        <tr>
                            <th>Matière</th>
                            <th>Professeur</th>
                            <th>Changer par :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        for ($i = 0; $i < count($mat); $i++) {
                            echo '<tr>';
                            echo '<td><input value=' . $mat[$i]['id'] . ' hidden name="mat[]">' . $mat[$i]['nom'] . '</td>';
                            $td_pg = "Vide";
                            echo '<td>';
                            for ($k = 0; $k < count($pg); $k++) {

                                if ($pg[$k]['matiere'] == $mat[$i]['id']) {
                                    $td_pg =  $pg[$k]['nom'] .' '.$pg[$k]['prenom'] ;
                                }
                            }
                            echo "$td_pg</td>";
                            echo '<td><select class="form-control form-control-user" name="prof[]">';
                            for ($j = 0; $j < count($prof); $j++) {

                                if ($prof[$j]['matiere'] == $mat[$i]['id']) {
                                    echo '<option value=' . $prof[$j]['id'] . ' >' . $prof[$j]['nom'] .' '.$prof[$j]['prenom'] . '</option>';
                                }
                            }
                            echo '<select></td>';

                            echo '</tr>';
                        }
                        ?>
                    </tbody>

                </table>
                

            </div>
            <div class="modal-footer">
                <div class="btn-block align-content-center ">
                    <button type="submit" name="ajouter" value="Ajouter" class="btn  btn-primary col-sm-6 mb-3 mb-sm-0">Ajouter</button>
                    <button type="reset" name="annuler" value="Annuler" class="btn  btn-secondary col-sm-5 mb-3  mb-sm-0">Annuler</button>
                </div>
            </div>

        </form>
    </div>
</div>
<script>

</script>