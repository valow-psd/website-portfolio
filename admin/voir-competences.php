<?php

include "header.php";
include "navbar.php";

include "../basededonnees.php";

$MESSAGE_SQL_COMP_Comp = "SELECT * FROM competences;";
$requeteVoirComp = $basededonnees->prepare($MESSAGE_SQL_COMP_Comp);
$requeteVoirComp->execute();
$voirComp = $requeteVoirComp->fetchAll();

?>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Voir /</span> Projets personnels</h4>
            <div class="card">
                <h5 class="card-header"></h5>

                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Catégorie</th>
                            <th>Image</th>
                            <th>Lien</th>
                            <th>Niveau Maitrise</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">

                        <!--                début table ligne-->

                        <?php
                        foreach($voirComp as $verComp){
                            $idComp = $verComp["id"];
                            $nomComp = $verComp["nom"];
                            $catComp = $verComp["categorie"];
                            $imageComp = $verComp["image"];
                            $lienComp = $verComp["lien"];
                            $nivComp = $verComp["niveau_maitrise"];
                            ?>
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?=$idComp?></strong></td>
                                <td><?=$nomComp?></td>
                                <td>
                                    <?=$catComp?>
                                </td>
                                <td>
                                    <?=$imageComp?>
                                </td>
                                <td>
                                    <?=$lienComp?>
                                </td>
                                <td>
                                    <?=$nivComp?>
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