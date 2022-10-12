<?php

include "header.php";
include "navbar.php";

include "../basededonnees.php";

$editIdCompet = $_POST["id_competence_edit"];

$editNomCompet =  $_POST["nom_competence_edit"];
$editTypeCompet = $_POST["type_competence_edit"];
$editNiveauCompet =  $_POST["niveau_competence_edit"];
$editLienCompet =  $_POST["lien_compet_edit"];
$editImageCompet =  $_POST["image_compt_edit"];

$MESSAGE_SQL_UPDATE_COMPETENCES = "UPDATE competences SET nom = '$editNomCompet', categorie = '$editTypeCompet', image = '$editImageCompet', lien = '$editLienCompet', niveau_maitrise='$editNiveauCompet' WHERE id LIKE $editIdCompet;";
$requeteUpdtCompetences = $basededonnees->prepare($MESSAGE_SQL_UPDATE_COMPETENCES);
$requeteUpdtCompetences->execute();
$updateCompetences = $requeteUpdtCompetences->fetchAll();

?>