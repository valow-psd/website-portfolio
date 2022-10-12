<?php

include "header.php";
include "navbar.php";
include "../basededonnees.php";

$idDelProSco = $_GET["id"];

$MESSAGE_SQL_SSSSSSS_PROJET_SCO = "SELECT * FROM projets_sco WHERE id LIKE $idDelProSco";
$requeteSSSSSSSProjSco = $basededonnees->prepare($MESSAGE_SQL_SSSSSSS_PROJET_SCO);
$requeteSSSSSSSProjSco->execute();
$SSSSProjSco = $requeteSSSSSSSProjSco->fetchAll();

?>
<!-- Content wrapper -->
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Ajout /</span> Projets scolaires</h4>
        <div class="col-md-6">
            <div class="card mb-4">
                <!--                    <h5 class="card-header">Form Controls</h5>-->
                <div class="card-body">
                    <form action="traitement-edit-proj-sco.php" method="post">
                    <?php
                        foreach($SSSSProjSco as $ProjScoSSSS){

                    ?>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Id</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="id_proj_sco_edit"
                                    name="id_proj_sco_edit"
                                    value="<?=$ProjScoSSSS["id"]?>"
                                    placeholder=""
                                    readonly
                                />
                            </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Titre</label>
                            <input
                                type="text"
                                class="form-control"
                                id="titre_proj_sco_edit"
                                name="titre_proj_sco_edit"
                                value="<?=$ProjScoSSSS["titre"]?>"
                                placeholder=""
                            />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Quel cours ?</label>
                            <input
                                type="text"
                                class="form-control"
                                id="cours_proj_sco"
                                name="cours_proj_sco"
                                value="<?=$ProjScoSSSS["quel_cours"]?>"
                                placeholder=""
                            />
                        </div>

                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Description raccourcie</label>
                            <textarea class="form-control" id="desc_proj_sco" name="desc_proj_sco" rows="2"><?=$ProjScoSSSS["descriptio"]?></textarea>
                        </div>
                        <br>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Description longue</label>
                            <textarea class="form-control" id="descL_proj_sco" name="descL_proj_sco" rows="4"><?=$ProjScoSSSS["description_longue"]?></textarea>
                        </div>
                        <br>

                        <div class="mb-3 row">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Date réal. projet</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" value="<?=$ProjScoSSSS["date_real"]?>" id="date_proj_sco" name="date_proj_sco"/>
                            </div>
                        </div>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Lien vers projet</label>
                            <textarea class="form-control" id="lien_proj_sco" name="lien_proj_sco" rows="1"><?=$ProjScoSSSS["lien"]?></textarea>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image_proj_sco" name="image_proj_sco" accept="image/png, image/jpeg, image/jpg, image/webp, image/svg"/>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


