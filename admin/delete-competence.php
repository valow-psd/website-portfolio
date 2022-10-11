<?php

include "header.php";
include "navbar.php";
include "../basededonnees.php";

$idDelComp = $_GET["id"];

$MESSAGE_SQL_DEL_COMPETENCES = "DELETE FROM competences WHERE id LIKE $idDelComp";
$requeteDelCompetences = $basededonnees->prepare($MESSAGE_SQL_DEL_COMPETENCES);
$requeteDelCompetences->execute();
$delCompetences = $requeteDelCompetences->fetchAll();

?>


