<?php

include "header.php";
include "navbar.php";

include "../basededonnees.php";

$updateIdProjSco =  $_POST["id_proj_sco_edit"];
$updateTitreProjSco = $_POST["titre_proj_sco_edit"];
$updateCoursProjSco =  $_POST["cours_proj_sco"];
$updateDescProjSco =  $_POST["desc_proj_sco"];
$updateDescLSco =  $_POST["descL_proj_sco"];
$updateDateProjSco =  $_POST["date_proj_sco"];
$updateLienProjSco =  $_POST["lien_proj_sco"];
$updateImageProjSco =  $_POST["image_proj_sco"];

$MESSAGE_SQL_update_ProjSco = "UPDATE projets_sco SET titre = '$updateTitreProjSco', descriptio = '$updateDescProjSco', date_real = '$updateDateProjSco', quel_cours = '$updateCoursProjSco', img='$updateImageProjSco', lien ='$updateLienProjSco', description_longue ='$updateDescLSco' WHERE id LIKE $updateIdProjSco;";
$requeteUpdtProjSco = $basededonnees->prepare($MESSAGE_SQL_update_ProjSco);
$requeteUpdtProjSco->execute();
$updateProjetsSco = $requeteUpdtProjSco->fetchAll();

?>