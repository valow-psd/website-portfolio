<?php

include "header.php";
include "navbar.php";

include "../basededonnees.php";

    //print_r($_POST);
    $editIdPP = $_POST["id_PP_edit"];
    $editTitrePP =  $_POST["titre_proj_persos_edit"];
    $editDescPP = $_POST["desc_proj_persos_edit"];
    $editDescLPP =  $_POST["descL_proj_persos_edit"];
    $editDatePP =  $_POST["date_proj_persos_edit"];
    $editLienPP =  $_POST["lien_proj_persos_edit"];
    $editImagePP = $_POST["image_proj_persos_edit"];

    $MESSAGE_SQL_UPDATE_PP = "UPDATE projets_persos SET titre = '$editTitrePP', description = '$editDescPP', date_real = '$editDatePP', lien = '$editLienPP', image='$editImagePP', description_longue ='$editDescLPP' WHERE id LIKE $editIdPP;";
    $requeteUpdtPP = $basededonnees->prepare($MESSAGE_SQL_UPDATE_PP);
    $requeteUpdtPP->execute();
    $updatePP = $requeteUpdtPP->fetchAll();
?>