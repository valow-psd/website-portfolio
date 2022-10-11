<?php

include "header.php";
include "navbar.php";

include "../basededonnees.php";



$ajoutTitreProjPers =  $_POST["titre_proj_sco"];
$ajoutDescProjPers = $_POST["desc_proj_sco"];
$ajoutDescLProjPers =  $_POST["descL_proj_sco"];
$ajoutDateProjPers =  $_POST["date_proj_sco"];
$ajoutLienProjPers =  $_POST["lien_proj_sco"];
$ajoutImageProjPers =  $_POST["image_proj_sco"];

$MESSAGE_SQL_AJOUT_ProjPers = "INSERT INTO projets_persos (titre, description, date_real, lien, image, description_longue)VALUES ('$ajoutTitreProjPers', '$ajoutDescProjPers', '$ajoutDateProjPers', '$ajoutLienProjPers', '$ajoutImageProjPers','$ajoutDescLProjPers');";
$requeteAjtProjPersos = $basededonnees->prepare($MESSAGE_SQL_AJOUT_ProjPers);
$requeteAjtProjPersos->execute();
$ajoutProjetsPersos = $requeteAjtProjPersos->fetchAll();


?>