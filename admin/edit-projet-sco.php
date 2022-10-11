<?php

include "header.php";
include "navbar.php";
include "../basededonnees.php";

$idDelProSco = $_GET["id"];

$MESSAGE_SQL_DEL_PROJET_SCO = "DELETE FROM projets_sco WHERE id LIKE $idDelProSco";
$requeteDelProjSco = $basededonnees->prepare($MESSAGE_SQL_DEL_PROJET_SCO);
$requeteDelProjSco->execute();
$delProjSco = $requeteDelProjSco->fetchAll();

?>


