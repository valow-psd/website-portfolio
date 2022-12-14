<?php

include "header.php";
include "navbar.php";

?>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Ajout /</span> Projets personnels</h4>
            <div class="col-md-6">
                <div class="card mb-4">
<!--                    <h5 class="card-header">Form Controls</h5>-->
                    <div class="card-body">
                        <form action="traitement-ajout-proj-pers.php" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Titre</label>
                            <input
                                type="text"
                                class="form-control"
                                id="titre_proj_persos"
                                name="titre_proj_persos"
                            />
                        </div>

                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Description raccourcie</label>
                            <textarea class="form-control" id="desc_proj_persos" name="desc_proj_persos" rows="2"></textarea>
                        </div>
                        <br>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Description longue</label>
                            <textarea class="form-control" id="descL_proj_persos" name="descL_proj_persos" rows="4"></textarea>
                        </div>
                        <br>

                        <div class="mb-3 row">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Date réal. projet</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" value="" id="date_proj_persos" name="date_proj_persos"/>
                            </div>
                        </div>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Lien vers projet</label>
                            <textarea class="form-control" id="lien_proj_persos" name="lien_proj_persos" rows="1"></textarea>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image_proj_persos" name="image_proj_persos" accept="image/png, image/jpeg, image/jpg, image/webp, image/svg"/>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
include "footer.php";

?>