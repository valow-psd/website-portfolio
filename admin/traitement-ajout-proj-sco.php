<?php

include "header.php";
include "navbar.php";

include "../basededonnees.php";



$ajoutTitreProjSco =  $_POST["titre_proj_sco"];
$ajoutCoursProjSco = $_POST["cours_proj_sco"];
$ajoutDescProjSco =  $_POST["desc_proj_sco"];
$ajoutDescLProjSco =  $_POST["descL_proj_sco"];
$ajoutDateProjSco =  $_POST["date_proj_sco"];
$ajoutLienProjSco =  $_POST["lien_proj_sco"];
$ajoutImageProjSco =  $_POST["image_proj_sco"];

$MESSAGE_SQL_AJOUT_ProjSco = "INSERT INTO projets_sco (titre, descriptio, date_real, quel_cours, img, lien, description_longue)VALUES ('$ajoutTitreProjSco','$ajoutDescProjSco' ,'$ajoutDateProjSco','$ajoutCoursProjSco','$ajoutImageProjSco', '$ajoutLienProjSco','$ajoutDescLProjSco');";
$requeteAjtProjSco = $basededonnees->prepare($MESSAGE_SQL_AJOUT_ProjSco);
$requeteAjtProjSco->execute();
$ajoutProjetsSco = $requeteAjtProjSco->fetchAll();

?>