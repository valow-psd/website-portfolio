<?php

include "header.php";
include "navbar.php";
include "../basededonnees.php";

$idDelProPer = $_GET["id"];

$MESSAGE_SQL_DEL_PROJET_PERS = "DELETE FROM projets_persos WHERE id LIKE $idDelProPer";
$requeteDelProjPers = $basededonnees->prepare($MESSAGE_SQL_DEL_PROJET_PERS);
$requeteDelProjPers->execute();
$delProjPers = $requeteDelProjPers->fetchAll();

?>


