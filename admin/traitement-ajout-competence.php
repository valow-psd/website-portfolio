<?php

include "header.php";
include "navbar.php";

include "../basededonnees.php";



$ajoutNomCompet =  $_POST["nom_competence"];
$ajoutTypeCompet = $_POST["type_competence"];
$ajoutNiveauCompet =  $_POST["niveau_competence"];
$ajoutLienCompet =  $_POST["lien_compet"];
$ajoutImageCompet =  $_POST["image_compt"];

$MESSAGE_SQL_AJOUT_COMPETENCES = "INSERT INTO competences (nom, categorie, image, lien, niveau_maitrise)VALUES ('$ajoutNomCompet','$ajoutTypeCompet' ,'$ajoutImageCompet','$ajoutLienCompet','$ajoutNiveauCompet');";
$requeteAjtCompetences = $basededonnees->prepare($MESSAGE_SQL_AJOUT_COMPETENCES);
$requeteAjtCompetences->execute();
$ajoutCompetences = $requeteAjtCompetences->fetchAll();

?>