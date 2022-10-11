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
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nom</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nom_competence"
                                name="nom_competence"
                                placeholder=""
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
                            />
                        </div>
                        <div>
                            <label for="exampleFormControlTextarea1" class="form-label">Lien vers projet</label>
                            <textarea class="form-control" id="lien_compet" name="lien_compet" rows="1"></textarea>
                        </div>
                        <br>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" id="image_proj_sco" name="image_proj_sco" accept="image/png, image/jpeg, image/jpg, image/webp, image/svg"/>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include "footer.php";

?>