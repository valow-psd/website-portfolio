<?php

include "header.php";
include "inner-menu.php";
include "basededonnees.php";
?>



                <ul class="l-main-content main-content">

<!--                    Début partie présentation-->
                    <li class="l-section section section--is-active">
                        <div class="intro">
                            <div class="intro--banner">
                                <h1>Valentin Munch - <br>Développeur <br>et Graphiste</h1>
                                <button class="cta">Me contacter
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                                      <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                                          <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                                      </g>
                                    </svg>
                                    <span class="btn-background"></span>
                                </button>
                                <img src="https://futhead.cursecdn.com/static/img/21/players_alt/p117631383.png" alt="Welcome">
                            </div>
                            <p>
                                Mon parcours
                            </p>
                            <div class="intro--options">

                                <br>
                                <a href="#0">
                                    <h3>Août 2022 - Décembre 2022</h3>
                                    <p>Cégep Matane, Québec</p>
                                </a>
                                <a href="#0">
                                    <h3>2021-?</h3>
                                    <p>BUT Informatique - IUT Belfort-Montbéliard</p>
                                </a>
                                <a href="#0">
                                    <h3>2014-2021</h3>
                                    <p>Collège/Lycée de Zillisheim</p>
                                </a>
                            </div>
                        </div>
                    </li>
<!--                    début présentation-->
                    <li class="l-section section">
                        <div class="about">
                            <div class="about--banner">
                                <h2>Mes compétences</h2>
<!--                                <img src="assets/img/about-visual.png" alt="About Us">-->
                            </div>
                            <p>Langages</p>
                            <?php
                            $MESSAGE_SQL_COMP_Lang = "SELECT * FROM competences WHERE categorie LIKE 'langage';";
                            $requeteCompetencesLang = $basededonnees->prepare($MESSAGE_SQL_COMP_Lang);
                            $requeteCompetencesLang->execute();
                            $listeCompLang = $requeteCompetencesLang->fetchAll();

                            ?>

                            <div class="about--options">

                                <?php

                                    foreach($listeCompLang as $catlangage){


                                        $imgCatLang = $catlangage["image"];
                                        $nomCatLang = $catlangage["nom"];

                                        //print_r($imgCatLang);
                                ?>
                                <a href="#" style="background-image: url('<?=$imgCatLang?>');">
                                    <h3><?=$nomCatLang?></h3>
                                </a>

                                <?php
                                    }
                                ?>
                            </div>
                            <br><br>
                            <p>CMS</p>
                            <?php
                            $MESSAGE_SQL_COMP_CMS = "SELECT * FROM competences WHERE categorie LIKE 'CMS';";
                            $requeteCompetencesCMS = $basededonnees->prepare($MESSAGE_SQL_COMP_CMS);
                            $requeteCompetencesCMS->execute();
                            $listeCompCMS = $requeteCompetencesCMS->fetchAll();
                            ?>
                            <div class="about--options">

                                <?php
                                foreach($listeCompCMS as $catCMS){
                                    //print_r($catCMS);
                                    $imgCatCMS = $catCMS["image"];
                                    $nomCatCMS = $catCMS["nom"];
                                    ?>
                                    <a href="#" style="background-image: url("<?=$imgCatCMS?>");">
                                        <h3><?=$nomCatCMS?></h3>
                                    </a>

                                    <?php
                                }
                                ?>
                            </div>
                            <br><br>
                            <p>Côté serveur</p>
                            <?php


                            $MESSAGE_SQL_COMP_Serv = "SELECT * FROM competences WHERE categorie LIKE 'serveur';";
                            $requeteCompetencesServ = $basededonnees->prepare($MESSAGE_SQL_COMP_Serv);
                            $requeteCompetencesServ->execute();
                            $listeCompServ = $requeteCompetencesServ->fetchAll();

                            ?>
                            <div class="about--options">
                                <?php
                                foreach($listeCompServ as $catServeur){
                                    $imgCatServ = $catServeur["image"];
                                    $nomCatServ = $catServeur["nom"];
                                    ?>
                                    <a href="#" style="background-image: url("<?=$imgCatServ?>");">
                                        <h3><?=$nomCatServ?></h3>
                                    </a>

                                    <?php
                                    }
                                    ?>
                            </div>
                        </div>
                    </li>


                    <!--                    Début partie projets persos-->
<?php
$MESSAGE_SQL_LIST_PROJ_PERS = "SELECT titre, image, description FROM projets_persos;";

$requeteListeProjPer = $basededonnees->prepare($MESSAGE_SQL_LIST_PROJ_PERS);
$requeteListeProjPer->execute();
$listeProjPer = $requeteListeProjPer->fetchAll();

?>

                    <li class="l-section section">
                        <div class="work">
                            <h2>Projets personnels</h2>
                            <div class="work--lockup">
                                <ul class="slider">
                                    <?php
                                    $counterz=0;
                                    while($counterz<3){
                                    foreach($listeProjPer as $projpersos){
                                        $imgProjPersos = $projpersos['image'];
                                        $titreProjPerso = $projpersos['titre'];
                                        $descProjPerso = $projpersos['description'];

                                        if($counterz == 0){
                                            $posw = "left";
                                        } if($counterz == 1){
                                            $posw = "center";
                                        }
                                        if($counterz == 2){
                                            $posw = "right";
                                        }
                                    ?>
                                    <li class="slider--item slider--item-<?=$posw?>">
                                        <a href="#0">
                                            <div class="slider--item-image">
                                                <img src="<?=$imgProjPersos?>" alt="Victory">
                                            </div>
                                            <p class="slider--item-title"><?=$titreProjPerso?></p>
                                            <p class="slider--item-description"><?=$descProjPerso?></p>
                                        </a>
                                    </li>
                                    <?php
                                        $counterz++;
                                        }
                                    }
                                    ?>
                                </ul>
                                <div class="slider--prev">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                    c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                    c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z"/>
                  </g>
                  </svg>
                                </div>
                                <div class="slider--next">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--                    Début partie présentation projets scolaires-->
                    <?php
                    $MESSAGE_SQL_LIST_PROJ_SCO = "SELECT titre, img, descriptio FROM projets_sco;";

                    $requeteListeProjSco = $basededonnees->prepare($MESSAGE_SQL_LIST_PROJ_SCO);
                    $requeteListeProjSco->execute();
                    $listeProjSco = $requeteListeProjSco->fetchAll();

                    ?>
                    <li class="l-section section">
                        <div class="work">
                            <h2>Projets Scolaires</h2>
                            <div class="work--lockup">
                                <ul class="slider">
                                    <?php
                                    $counter=0;
                                        while($counter<3){
                                            foreach($listeProjSco as $projetsScolaires){

                                                $titreProjSco = $projetsScolaires["titre"];
                                                $descProjSco = $projetsScolaires["descriptio"];
                                                $imgProjSco = $projetsScolaires["img"];

                                                if($counter == 0){
                                                    $pos = "left";
                                                } if($counter == 1){
                                                    $pos = "center";
                                                }
                                                if($counter == 2){
                                                    $pos = "right";
                                                }

                                                print_r($counter);
                                    ?>
                                    <li class="slider--item slider--item-<?=$pos?>">
                                        <a href="#0">
                                            <div class="slider--item-image">
                                                <img src="<?=$imgProjSco ?>" alt="Victory">
                                            </div>
                                            <p class="slider--item-title"><?=$titreProjSco ?></p>
                                            <p class="slider--item-description"><?=$descProjSco ?></p>
                                        </a>
                                    </li>
                                    <?php
                                                $counter++;
                                            }
                                        }
                                    ?>
                                </ul>
                                <div class="slider--prev">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M561,1169C525,1155,10,640,3,612c-3-13,1-36,8-52c8-15,134-145,281-289C527,41,562,10,590,10c22,0,41,9,61,29
                    c55,55,49,64-163,278L296,510h575c564,0,576,0,597,20c46,43,37,109-18,137c-19,10-159,13-590,13l-565,1l182,180
                    c101,99,187,188,193,199c16,30,12,57-12,84C631,1174,595,1183,561,1169z"/>
                  </g>
                  </svg>
                                </div>
                                <div class="slider--next">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 150 118" style="enable-background:new 0 0 150 118;" xml:space="preserve">
                  <g transform="translate(0.000000,118.000000) scale(0.100000,-0.100000)">
                      <path d="M870,1167c-34-17-55-57-46-90c3-15,81-100,194-211l187-185l-565-1c-431,0-571-3-590-13c-55-28-64-94-18-137c21-20,33-20,597-20h575l-192-193C800,103,794,94,849,39c20-20,39-29,61-29c28,0,63,30,298,262c147,144,272,271,279,282c30,51,23,60-219,304C947,1180,926,1196,870,1167z"/>
                  </g>
                  </svg>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--                    Début partie contact-->
                    <li class="l-section section">
                        <div class="contact">
                            <div class="contact--lockup">
                                <div class="modal" style="width: 800px;">
                                    <div class="modal--information">
                                        <p>Mes informations</p>
                                        <a href="mailto:email@gmail.com">email@gmail.com</a>
                                        <a href="tel:++33123456545">+33 1 23 45 65 45</a>
                                    </div>
                                    <ul class="modal--options">
                                        <li><a href="#0">Bēhance</a></li>
                                        <li><a href="#0">dribbble</a></li>
                                        <li><a href="#0">Github</a></li>
                                        <li><a href="twitter.com/espion_modz">Me contacter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--                    Début partie contact-->
                    <li class="l-section section">
                        <div class="hire">
                            <h2>Quel est votre projet ?</h2>
                            <!--  formspree.io pour tout setup -->
                            <form class="work-request">
                                <div class="work-request--options">
                  <span class="options-a">
                    <input id="opt-1" type="checkbox" value="app design">
                    <label for="opt-1">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Design d'App
                    </label>
                    <input id="opt-2" type="checkbox" value="graphic design">
                    <label for="opt-2">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Design Graphique
                    </label>
                    <input id="opt-3" type="checkbox" value="motion design">
                    <label for="opt-3">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Motion Design
                    </label>
                  </span>
                                    <span class="options-b">
                    <input id="opt-4" type="checkbox" value="ux design">
                    <label for="opt-4">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      UX Design
                    </label>
                    <input id="opt-5" type="checkbox" value="webdesign">
                    <label for="opt-5">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      Design Web
                    </label>
                    <input id="opt-6" type="checkbox" value="marketing">
                    <label for="opt-6">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                           viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      SEO & Marketing
                    </label>
                  </span>
                                </div>
                                <div class="work-request--information">
                                    <div class="information-name">
                                        <input id="name" type="text" spellcheck="false">
                                        <label for="name">Nom</label>
                                    </div>
                                    <div class="information-email">
                                        <input id="email" type="email" spellcheck="false">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <input type="submit" value="Envoyer">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php require "outer-nav.php"; ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-2.2.4.min.js"><\/script>')</script>
<script src="assets/js/functions-min.js"></script>
</body>
</html>
