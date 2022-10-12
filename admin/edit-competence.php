<?php

include "header.php";
include "navbar.php";
include "../basededonnees.php";


$idEditComp = $_GET["id"];

$MESSAGE_SQL_SSSS_COMPETENCES = "SELECT * FROM competences WHERE id LIKE $idEditComp";
$requeteSSSSSCompetences = $basededonnees->prepare($MESSAGE_SQL_SSSS_COMPETENCES);
$requeteSSSSSCompetences->execute();
$SSSSCompetences = $requeteSSSSSCompetences->fetchAll();

?>


<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Ajout /</span> Projets personnels</h4>
        <div class="col-md-6">
            <div class="card mb-4">
                <!--                    <h5 class="card-header">Form Controls</h5>-->
                <div class="card-body">
                    <form action="traitement-edit-competence.php" method="post">
                        <?php
                            foreach($SSSSCompetences as $CompetencesSSS)
                        ?>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Id</label>
                            <input
                                    type="text"
                                    class="form-control"
                                    id="id_competence_edit"
                                    name="id_competence_edit"
                                    placeholder=""
                                    value="<?=$CompetencesSSS["id"]?>"
                                    readonly
                            />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nom_competence_edit"
                                name="nom_competence_edit"
                                placeholder=""
                                value="<?=$CompetencesSSS["nom"]?>"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Type</label>
                            <input
                                type="text"
                                class="form-control"
                                id="type_competence_edit"
                                name="type_competence_edit"
                                placeholder="CMS, serveur, langage"
                                value="<?=$CompetencesSSS["categorie"]?>"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Niveau maitrise</label>
                            <input
                                type="number"
                                class="form-control"
                                id="niveau_competence_edit"
                                name="niveau_competence_edit"
                                placeholder=""
                                min="0" max="100"
                                value="<?=$CompetencesSSS["niveau_maitrise"]?>"
                            />
                        </div>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Lien vers projet</label>
                            <textarea class="form-control" id="lien_compet_edit" name="lien_compet_edit" rows="1"><?=$CompetencesSSS["lien"]?></textarea>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" src="<?=$CompetencesSSS["image"]?>" type="file" id="image_compt_edit" name="image_compt_edit" accept="image/png, image/jpeg, image/jpg, image/webp, image/svg"/>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


