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


<?=$SSSSCompetences[""]?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Ajout /</span> Projets personnels</h4>
        <div class="col-md-6">
            <div class="card mb-4">
                <!--                    <h5 class="card-header">Form Controls</h5>-->
                <div class="card-body">
                    <form action="traitement-ajout-competence.php" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nom_competence"
                                name="nom_competence"
                                placeholder=""
                                value="<?=$SSSSCompetences["nom"]?>"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Type</label>
                            <input
                                type="text"
                                class="form-control"
                                id="type_competence"
                                name="type_competence"
                                placeholder="CMS, serveur, langage"
                                value="<?=$SSSSCompetences["categorie"]?>"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Niveau maitrise</label>
                            <input
                                type="number"
                                class="form-control"
                                id="niveau_competence"
                                name="niveau_competence"
                                placeholder=""
                                min="0" max="100"
                                value="<?=$SSSSCompetences["niveau_maitrise"]?>"
                            />
                        </div>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Lien vers projet</label>
                            <textarea class="form-control" id="lien_compet" name="lien_compet" rows="1"></textarea>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image_compt" name="image_compt" accept="image/png, image/jpeg, image/jpg, image/webp, image/svg"/>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


