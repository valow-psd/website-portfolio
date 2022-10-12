<?php

include "header.php";
include "navbar.php";
include "../basededonnees.php";

$idEdtProPer = $_GET["id"];

$MESSAGE_SQL_SSSSS_PROJET_PERS = "SELECT * FROM projets_persos WHERE id LIKE $idEdtProPer";
$requeteSSSSSProjPers = $basededonnees->prepare($MESSAGE_SQL_SSSSS_PROJET_PERS);
$requeteSSSSSProjPers->execute();
$SSSSProjPers = $requeteSSSSSProjPers->fetchAll();

?>

<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Ajout /</span> Projets personnels</h4>
        <div class="col-md-6">
            <div class="card mb-4">
                <!--                    <h5 class="card-header">Form Controls</h5>-->
                <div class="card-body">
                    <form action="traitement-edit-proj-pers.php" method="post">
                        <?php
                        foreach($SSSSProjPers as $ProjPersSSSS)

                        ?>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Id</label>
                            <input
                                    type="text"
                                    class="form-control"
                                    id="id_PP_edit"
                                    name="id_PP_edit"
                                    placeholder=""
                                    value="<?=$ProjPersSSSS["id"]?>"
                                    readonly
                            />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Titre</label>
                            <input
                                type="text"
                                class="form-control"
                                id="titre_proj_persos_edit"
                                name="titre_proj_persos_edit"
                                value="<?=$ProjPersSSSS["titre"]?>"
                            />
                        </div>

                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Description raccourcie</label>
                            <textarea class="form-control" id="desc_proj_persos_edit" name="desc_proj_persos_edit" rows="2"><?=$ProjPersSSSS["description"]?></textarea>
                        </div>
                        <br>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Description longue</label>
                            <textarea class="form-control" id="descL_proj_persos_edit" name="descL_proj_persos_edit" rows="4"><?=$ProjPersSSSS["description_longue"]?></textarea>
                        </div>
                        <br>

                        <div class="mb-3 row">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Date réal. projet</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" value="<?=$ProjPersSSSS["date_real"]?>" id="date_proj_persos_edit" name="date_proj_persos_edit"/>
                            </div>
                        </div>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Lien vers projet</label>
                            <textarea class="form-control" id="lien_proj_persos_edit" name="lien_proj_persos_edit" rows="1"><?=$ProjPersSSSS["lien"]?></textarea>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image_proj_persos_edit" name="image_proj_persos_edit" accept="image/png, image/jpeg, image/jpg, image/webp, image/svg"/>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>


