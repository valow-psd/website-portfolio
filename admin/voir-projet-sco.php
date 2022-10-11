<?php

include "header.php";
include "navbar.php";

include "../basededonnees.php";

$MESSAGE_SQL_COMP_ProjSco = "SELECT * FROM projets_sco;";
$requeteVoirProjSco = $basededonnees->prepare($MESSAGE_SQL_COMP_ProjSco);
$requeteVoirProjSco->execute();
$voirProjetsSco = $requeteVoirProjSco->fetchAll();

?>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Voir /</span> Projets scolaires</h4>
    <div class="card">
        <h5 class="card-header"></h5>
        <a class="card-header" href="ajout-projet-sco.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ajouter nouveau projet</a>
        <div class="table-responsive text-nowrap">

            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date Réalisation</th>
                    <th>Quel cours</th>
                    <th>Image</th>
                    <th>Lien</th>
                    <th>Description longue</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">

<!--                début table ligne-->

                <?php
                    foreach($voirProjetsSco as $verProjectoSco){
                        $idProjectoSco = $verProjectoSco["id"];
                        $titreProjectoSco = $verProjectoSco["titre"];
                        $descriptionProjectoSco = $verProjectoSco["descriptio"];
                        $daterealProjectoSco = $verProjectoSco["date_real"];
                        $coursProjectoSco = $verProjectoSco["quel_cours"];
                        $imgProjectoSco = $verProjectoSco["img"];
                        $lienProjectoSco = $verProjectoSco["lien"];
                        $desclongueProjectoSco = $verProjectoSco["description_longue"];
                ?>
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?=$idProjectoSco?></strong></td>
                    <td><?=$titreProjectoSco?></td>
                    <td>
                        <?=$descriptionProjectoSco?>
                    </td>
                    <td>
                        <?=$daterealProjectoSco?>
                    </td>
                    <td>
                        <?=$coursProjectoSco?>
                    </td>
                    <td>
                        <?=$imgProjectoSco?>
                    </td>
                    <td>
                        <?=$lienProjectoSco?>
                    </td>
                    <td>
                        <?=$desclongueProjectoSco?>
                    </td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                >
                                <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                                >
                            </div>
                        </div>
                    </td>
                </tr>
                <?php
                    }
                ?>
<!--                fin table ligne-->
                </tbody>
            </table>
        </div>
    </div>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

<?php
include "footer.php";

?>