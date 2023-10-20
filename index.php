<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/mountain_black.png">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/stylesheet.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>L'atelier du Spitzberg</title>
</head>

<body>
    <?php /* include './maintenance.php' */ ?>
    <!-----------
    Navbar
    ----------->
    <header>
        <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary pos-icon-nav-mobile">
            <div class="container-fluid">
                <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav pos-menu-mobile">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#apropos">A propos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Prestations
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#prestations">Site vitrine / e-commerce</a></li>
                                <li><a class="dropdown-item" href="#deroulement">Déroulement d'un projet</a></li>
                                <li><a class="dropdown-item" href="#besoins">Cibler vos besoins !</a></li>
                            </ul>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-----------
    Section Home
    ---------->
    <section class="home section-position" id="home">
        <div class="scroll-section-home active">
            <div class="container-fluid">
                <div class="row forplanet">
                    <div class="col-lg-1 img-forplanet"></div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row pos-bottom-block">
                    <div class="col-lg-2 pos-left-aside-mobile">
                        <div class="row pos-left-aside">
                            <div class="col-lg-12">Scrollez vers le bas pour voir les prestations</div>
                            <div class="col-lg-12">
                                <img src="./img/arrow.png" alt="" width="25%">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 title-home">L'atelier du Spitzberg</div>
                    <div class="col-lg-2"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 subtitle-up-text">Vous êtes à la recherche d'un :</div>
                        </div>
                        <div class="row">
                            <div class="col subtitle-down" style="text-align: end;">[</div>
                            <h1 class="col subtitle-down-text slidetext fade" style="text-align: center;">Créateur de
                                site
                                Web
                            </h1>
                            <h1 class="col subtitle-down-text slidetext fade" style="text-align: center;">Webdesigner
                            </h1>
                            <h1 class="col subtitle-down-text slidetext fade" style="text-align: center;">Prestataire
                                SEO
                            </h1>
                            <div class="col subtitle-down" style="text-align: start;">]</div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row pos-btn-block">
                            <div class="col-lg-12 contact-text">Discutons de votre projet ensemble :</div>
                            <div class="col-lg-12">
                                <a href="#contact">
                                    <button type="button" class="btn-contact">Contactez-moi !</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----------
    Section A Propos
    ---------->
    <section class="apropos section-position background_apropos" id="apropos">
        <div class="scroll-section-apropos">
            <div class="container-fluid title-pos-mobile">
                <div class="row pos-title-section">
                    <div class="col-lg-2">
                        <img src="./img/mountain_black.png" alt="" style="width: 10vw;">
                    </div>
                    <h2 class="col-lg-10">A propos de votre futur collaborateur</h2>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-lg-8 pos-text-left">
                        <h4><strong>L’atelier du Spitzberg. Un nom étrange ! ... Et pourquoi ?</strong></h4>
                        <br>
                        <p>Voyageons vers les contrées du Nord ! </p>
                        <p>En suivant les coordonnées 78°54'00" Nord 18°01'00" Est, vous vous retrouverez bordé par la
                            mer de Barents, la mer du Groenland et l’océan Arctique.</p>
                        <br>
                        <p>Vous y êtes! Au coeur de l’archipel du Svalbard et plus précisément sur son île principal :
                            Le Spitzberg.</p>
                        <p>Au loin, des reliefs blancs se déplacent sur la banquise. Vous observez ces créatures
                            majestueuses du grand nord.</p>
                        <p>Et si un jour, ces reliefs ne s’apparenteraient plus qu’a un mirage?</p>
                        <br>
                        <p>L’ours polaire est devenu depuis quelques années un des emblèmes de la disparition d’espèces
                            dut aux changements des conditions climatiques.</p>
                        <p>Cette situation qui est à prendre en compte pour les générations futures nous engagent à
                            se mobiliser pour plus d’action.</p>
                        <br>
                        <div class="text-start">
                            <p>A mon niveau, dans la création de site internet, je ne peux que mettre en avant cette volonté dans ma démarche de
                                travail
                                :</p>
                            <br>
                            <ul>
                                <li>En utilisant des solutions ayant le moins d’impact énergétique.</li>
                                <li>En vous proposant en premier lieu des prestations d’hébergement dites ‘responsable’.
                                </li>
                                <li>En adhérant à l’éthique « 1% for the planet » dont vous pouvez consulter le site
                                    web en cliquant sur cet icone : <a href="https://www.onepercentfortheplanet.fr/"><img src="./img/1.png" alt="" style="width: 5%;"></a></li>
                            </ul>
                        </div>
                        <br>
                        <p>Et entre nous ?, Qui n’aurez jamais rêver d’avoir son atelier au Spitzberg ?</p>
                        <div class="col-lg-8 pos-img-polaire">
                            <img src="./img/svalbard.png" alt="" width="60%">
                        </div>
                        <br><br><br>
                        <h4><strong>Oui, mais si vous êtes là, c’est pour une préstation Web !</strong></h4>
                        <br>
                        <div class="text-start">
                            <p>Je m’appelle Alexandre et je suis situé en région Lyonnaise en tant que Freelance dans la
                                création de site Web.</p>
                            <p>Ce métier, je me le serais approprié sur le tard. Mon parcours de vie m’aura amené de
                                l’univers de la qualité industriel à un temps sur les routes du monde accompagné d’un
                                fidèle sac à dos jusqu’à me sédentariser et me plonger corps et âme dans les rouages de
                                la conception de site internet.</p>
                            <br>
                        </div>
                        <p class="inter-text">Pourquoi cette envie de concevoir des sites ?</p>
                        <br>
                        <p> ~ Un site est votre identité que l’on dévoile à tout les utilisateurs de la toile ~ </p>
                        <p> ~ Un site vous représente ~</p>
                        <p> ~ Un site véhicule un savoir faire, des produits, des informations ~ </p>
                        <p> ~ La création d’un site allie la technique de l’outil de conception utilisé à l’impact de
                            son
                            contenu ~</p>
                        <br>
                        <p class="accroche-text">Votre site, c’est vous !</p>
                        <br>
                        <br>
                        <div class="text-start">
                            <p class="inter-text">Et mes compétences dans tout ça ?</p>
                            <br>
                            <p>Début 2021, j’effectue une formation en Webdesign par le biais de l’école
                                Webforce 3 à Lyon. Mon diplôme en poche, j’intègre par la suite un poste de Webmaster
                                dans
                                une entreprise international d’Impression.</p>
                            <p>Société dans laquelle je reste 2 années. Ou j’aurais pu évoluer et participer à la
                                gestion de projet Web, tout en complétant ma pratique et mes connaissances
                                sur l’aspect ‘backend’ des sites.</p>
                            <br>
                            <p>En parallèle de cette période, je songe à persévérer afin de maitriser un processus
                                complet de création de site internet. De la première ébauche sur papier à un site
                                fonctionnel et
                                performant.</p>
                            <br>
                            <p>Je me forme sur plusieurs projets tout en utilisant les systèmes de gestion de
                                contenu(CMS) les plus utilisées dans le monde du web:</p>
                            <ul>
                                <li>Wordpress pour les sites vitrines</li>
                                <li>Prestashop pour les e-commerces</li>
                            </ul>
                            <p>Ces CMS, grâce à leur popularités offre une multitude de fonctionnalités et de
                                possibilités. Ainsi que le support de millions d’utilisateurs.</p>
                            <p>Mes connaissances général acquises de ces expériences, ma pratique quotidienne de ces
                                outils ainsi qu’une veille concurrentiel constante me permettent
                                d’appréhender les bonnes démarches et pratiques de la conception d’un site internet.</p>
                            <br>
                        </div>
                        <br><br><br>
                        <h4><strong>Les outils et technologies avec lesquels je travaille :</strong></h4>
                        <br>
                        <p>Retrouvez ci dessous les outils et les technologies que j'utilise. Les possibilitées données
                            pour créer un site internet sont large et évoluent quotidiennement. Je m'axe actuellement
                            sur ces technologies afin de vous proposer un travail de qualité.</p>
                        <br>
                        <div class="container-fluid pos-block-competences">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="./img/logo-wordpress.png" alt="" class="img-techno">
                                </div>
                                <div class="col-lg-3">
                                    <img src="./img/logo-prestashop.png" alt="" class="img-techno">
                                </div>
                                <div class="col-lg-3">
                                    <img src="./img/logo-html5.png" alt="" class="img-techno">
                                </div>
                                <div class="col-lg-3">
                                    <img src="./img/logo-css3.png" alt="" class="img-techno">
                                </div>
                            </div>
                            <div class="row nomobile">
                                <div class="col-lg-3 title-techno">Wordpress</div>
                                <div class="col-lg-3 title-techno">Prestashop</div>
                                <div class="col-lg-3 title-techno">HTML 5</div>
                                <div class="col-lg-3 title-techno">CSS 3</div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="./img/logo-javascript.png" alt="" class="img-techno">
                                </div>
                                <div class="col-lg-3">
                                    <img src="./img/logo-php.png" alt="" class="img-techno">
                                </div>
                                <div class="col-lg-3">
                                    <img src="./img/logo-jquery.png" alt="" class="img-techno">
                                </div>
                                <div class="col-lg-3">
                                    <img src="./img/logo-boostrap.png" alt="" class="img-techno">
                                </div>
                            </div>
                            <div class="row nomobile">
                                <div class="col-lg-3 title-techno">Javascript</div>
                                <div class="col-lg-3 title-techno">PHP</div>
                                <div class="col-lg-3 title-techno">Jquery</div>
                                <div class="col-lg-3 title-techno">Bootstrap</div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-3">
                                    <img src="./img/logo-mariadb.png" alt="" class="img-techno">
                                </div>
                                <div class="col-lg-3">
                                    <img src="./img/logo-mysql.png" alt="" class="img-techno">
                                </div>
                                <div class="col-lg-3">
                                    <img src="./img/logo-adobe.png" alt="" class="img-techno">
                                </div>
                                <div class="col-lg-3">
                                    <img src="./img/figma.png" alt="" class="img-techno">
                                </div>
                            </div>
                            <div class="row nomobile">
                                <div class="col-lg-3 title-techno">Maria DB</div>
                                <div class="col-lg-3 title-techno">My SQL</div>
                                <div class="col-lg-3 title-techno">La suite Adobe</div>
                                <div class="col-lg-3 title-techno">Figma</div>
                            </div>
                        </div>

                        <!----mobile--nom technologies-->
                        <div class="name-techno-mobile">
                            <div class="row name-techno-mobile">
                                <div class="col-3 title-techno">Wordpress</div>
                                <div class="col-3 title-techno">Prestashop</div>
                                <div class="col-3 title-techno">HTML 5</div>
                            </div>
                            <div class="row name-techno-mobile">
                                <div class="col-3 title-techno">CSS 3</div>
                                <div class="col-3 title-techno">Javascript</div>
                                <div class="col-3 title-techno">PHP</div>
                            </div>
                            <div class="row name-techno-mobile">
                                <div class="col-3 title-techno">Jquery</div>
                                <div class="col-3 title-techno">Bootstrap</div>
                                <div class="col-3 title-techno">Maria DB</div>
                            </div>
                            <div class="row name-techno-mobile">
                                <div class="col-3 title-techno">My SQL</div>
                                <div class="col-3 title-techno">La suite Adobe</div>
                                <div class="col-3 title-techno">Figma</div>
                            </div>
                        </div>
                        <!----mobile--nom technologies-->

                        <br><br><br>
                        <h4><strong>Et si je devais vous donner une bonne raison de collaborer ensemble?</strong></h4>
                        <br>
                        <p>Avant tout passionné et perfectionniste dans mon travail, je resterai sur ce mot d’ordre :
                        </p>
                        <div class="row">
                            <div class="col-3">
                                <!------
                                <img src="./img/polar-bear-left.png" style="height: 100px;" alt="">
                                ------>
                            </div>
                            <div class="col-6" style="align-self: center;">
                                <p class="accroche-text"">Faire de votre satisfaction, ma satisfaction!</p>
                        </div>
                        <div class=" col-3"><img src="./img/polar-bear-right.png" style="height: 100px;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pos-block-social">
                        <div class="col pos-social-logo">
                            <div>Retrouvez moi egalement sur ces reseaux :</div>
                        </div>
                        <div class="pos-social-logo">
                            <a href="">
                                <img src="./img/malt.png" alt="" width="25%">
                            </a>
                        </div>
                        <div class="pos-social-logo">
                            <a href="">
                                <img src="./img/linkedin.png" alt="" width="25%">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-----------
    Section Prestations
    ---------->
    <section class="prestations section-position background_presta" id="prestations">
        <div class="scroll-section-presta">
            <div class="container-fluid title-pos-mobile">
                <div class="row pos-title-section">
                    <div class="col-lg-2">
                        <img src="./img/mountain_white.png" alt="" style="width: 10vw" ;>
                    </div>
                    <h2 class="col-lg-10 section-dark">Le celier a prestations</h2>
                </div>
            </div>
            <div class="row text-presta">
                <div class="col-lg-12 pos-text-presta">
                    <h5 class="section-dark">Retrouvez ci dessous, les 2 prestations complètes pour la création d’un
                        site vitrine ou d'un site e-commerce.</h5>
                    <h5 class="section-dark">Les prestations peuvent évoluer en fonction de vos besoins.</h5>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row list-space">
                    <div class="col-lg-6">
                        <div class="block-site-vitrine">
                            <h4 class="title-presta">Site Vitrine</h4>
                            <div class="block-site-vitrine-content">
                                <ul>
                                    <li>Création d'une charte graphique sur mesure</li>
                                    <li>Proposition d’une maquette visuel pour votre futur site Internet (2 à 3 axes
                                        de
                                        modifications possibles et aucune limite de modifications)</li>
                                    <li>Intégration de votre site (intégration faites avec le CMS Wordpress)</li>
                                    <li>Ajustement responsive de votre site pour tablette et smartphone</li>
                                    <li>Optimisation du référencement naturel (SEO)</li>
                                    <li>Conseils sur l’achat du nom de domaine et de l’hébergement</li>
                                    <li>Mise au normes RGPD</li>
                                    <li>Mise en ligne du site</li>
                                    <li>Sécurisation de votre site</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 pos-btn-devis">
                            <a href="#contact">
                                <button type="button" class="btn-devis-presta">Demandez un devis à l'aide du formulaire de contact en selectionnant : 'Création d'un site vitrine'</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="block-e-commerce">
                            <h4 class="title-presta">Site e-commerce</h4>
                            <div class="block-e-commerce-content">
                                <ul>
                                    <li>Création d’une charte graphique sur mesure.</li>
                                    <li>Proposition d’une maquette visuel pour votre futur site Internet (2 à 3 axes de
                                        modifications possibles et aucune limite de modifications)</li>
                                    <li>Intégration de votre site e-shop (intégration faites avec le CMS Prestashop)
                                    </li>
                                    <li>Intégration de vos premières fiches produits</li>
                                    <li>Installation des paiements sécurisés</li>
                                    <li>Configuration des transporteurs</li>
                                    <li>Design des factures et mail automatiques</li>
                                    <li>Gestion des produits, des stocks et des commandes</li>
                                    <li>Ajustement responsive de votre site pour tablette et smartphone</li>
                                    <li>Optimisation du référencement naturel (SEO)</li>
                                    <li>Conseils sur l’achat du nom de domaine et de l’hébergement</li>
                                    <li>Mise au normes RGPD</li>
                                    <li>Mise en ligne du site</li>
                                    <li>Sécurisation de votre site</li>
                                    <li>Formation à la prise en main de votre site</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 pos-btn-devis">
                            <a href="#contact">
                                <button type="button" class="btn-devis-presta">Demandez un devis à l'aide du formulaire de contact en selectionnant : 'Création d'un site e-commerce'</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid title-pos-mobile" id="deroulement">
                    <div class="row pos-title-section">
                        <div class="col-lg-2">
                            <img src="./img/mountain_white.png" alt="" style="width: 10vw" ;>
                        </div>
                        <h2 class="col-lg-10 section-dark">Comment va se derouler la creation de votre site ?</h2>
                    </div>
                </div>
                <div class="pos-section-deroulement">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 pos-blocks-slide">
                                <div class="contain-slide">
                                    <div class="blocHorizontal">
                                        <div class="slide-deroulement etape-gauche" id="deroulement-begin">
                                            <div class="row pos-block-img-deroulement">
                                                <div class="col-lg-12">
                                                    <img src="./img/deroulement1.png" alt="" width="50%">
                                                </div>
                                                <h4>Etape 1</h4>
                                                <h4">Nous identifions ensemble vos besoins</h4>
                                            </div>
                                        </div>
                                        <div class="slide-deroulement etape-droite">
                                            <div class="row">
                                                <p>Pour vous accompagner dans votre projet, le premier rendez vous est
                                                    l’occasion d’échanger sur vos besoins et vos idées. Cette première
                                                    approche est primordial et nous pouvons l’organiser en
                                                    physique(région
                                                    lyonnaise), au téléphone ou en visio-conférence.</p>
                                                <br>
                                                <p>Ensemble nous allons définir les contours de votre site:</p>
                                                <ul>
                                                    <li>la thématique général de votre site</li>
                                                    <li>le public visé</li>
                                                    <li>les contraintes</li>
                                                    <li>les concurrents</li>
                                                    <li>le calendrier envisagé pour la réalisation</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="slide-deroulement etape-gauche">
                                            <div class="row pos-block-img-deroulement">
                                                <div class="col-lg-12">
                                                    <img src="./img/deroulement2.png" alt="" width="50%">
                                                </div>
                                                <h4>Etape 2</h4>
                                                <h4">Achat du nom de domaine et de l’hébergement</h4>
                                            </div>
                                        </div>
                                        <div class="slide-deroulement etape-droite">
                                            <div class="row">
                                                <p>Avant de débuter la création des maquettes, nous allons au préalable
                                                    déposer le nom de votre site Web et lui trouver un hébergement.</p>
                                                <br>
                                                <p>Je vous proposerai plusieurs solutions d’hébergement. En priorité des
                                                    hébergeurs performant et abordable ayant un engagement écologique et
                                                    durable.</p>
                                            </div>
                                        </div>
                                        <div class="slide-deroulement etape-gauche">
                                            <div class="row pos-block-img-deroulement">
                                                <div class="col-lg-12">
                                                    <img src="./img/deroulement3.png" alt="" width="50%">
                                                </div>
                                                <h4>Etape 3</h4>
                                                <h4">Création des maquettes Web</h4>
                                            </div>
                                        </div>
                                        <div class="slide-deroulement etape-droite">
                                            <div class="row">
                                                <p>Cette étape est important afin de faciliter l’intégration de votre
                                                    site
                                                    Web.</p>
                                                <br>
                                                <p>Votre site est conçu pour vous refléter, il est donc essentiel
                                                    qu’il soit entièrement personnalisé afin de vous démarquer de vos
                                                    concurrents et qu’il respectent les bonnes pratiques d’expérience
                                                    utilisateurs (UX).</p>
                                                <br>
                                                <p>Toutes les pages principales seront conçus sous forme de maquette
                                                    (visuel). Nous validerons ensemble chaque page au fur et mesure de
                                                    la
                                                    création.</p>
                                            </div>
                                        </div>
                                        <div class="slide-deroulement etape-gauche">
                                            <div class="row pos-block-img-deroulement">
                                                <div class="col-lg-12">
                                                    <img src="./img/deroulement4.png" alt="" width="50%">
                                                </div>
                                                <h4>Etape 4</h4>
                                                <h4">Intégration de votre site</h4>
                                            </div>
                                        </div>
                                        <div class="slide-deroulement etape-droite">
                                            <div class="row">
                                                <p>Une fois l’étape de la création des maquettes terminés et validés.
                                                    Vient
                                                    le moment de transformer ce travail en page Web.</p>
                                                <br>
                                                <p>L’intégration se
                                                    fait
                                                    tout en m’assurant que le rendu soit responsive (adapté pour
                                                    ordinateur,
                                                    tablette et téléphone).</p>
                                                <br>
                                                <p>Si vous le souhaitez, je pourrais vous transmettre un accès client
                                                    afin
                                                    de voir l’évolution du travail.</p>
                                            </div>
                                        </div>
                                        <div class="slide-deroulement etape-gauche">
                                            <div class="row pos-block-img-deroulement">
                                                <div class="col-lg-12">
                                                    <img src="./img/deroulement5.png" alt="" width="50%">
                                                </div>
                                                <h4>Etape 5</h4>
                                                <h4">Test, référencement SEO et lancement de votre site</h4>
                                            </div>
                                        </div>
                                        <div class="slide-deroulement etape-droite">
                                            <div class="row">
                                                <p>Sur cette phase, nous allons effectuer un contrôle finale de la
                                                    concordance entre le cahier des charges et le rendu de votre site.
                                                </p>
                                                <br>
                                                <p>Nous allons également tester les différentes fonctionnalités,
                                                    l’optimisation du référencement naturel, l’aspect responsive et la
                                                    vitesse de chargement.</p>
                                                <br>
                                                <p>Une fois cette étape réalisées, nous pourrons mettre votre site en
                                                    ligne.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="slide-deroulement etape-gauche">
                                            <div class="row pos-block-img-deroulement">
                                                <div class="col-lg-12">
                                                    <img src="./img/deroulement6.png" alt="" width="50%">
                                                </div>
                                                <h4>Etape 6</h4>
                                                <h4">Votre site est maintenant à vous !</h4>
                                            </div>
                                        </div>
                                        <div class="slide-deroulement etape-droite">
                                            <div class="row">
                                                <p>Je vous formerai à la prise en main de l’interface d’administration
                                                    de
                                                    votre site.</p>
                                                <br>
                                                <p>Vous pourrez ainsi gérer et editer vos contenus et être autonome sur les mise à jour.</p>
                                            </div>
                                        </div>
                                        <div class="slide-deroulement"><a href="#deroulement-begin"><img src="./img/fleche-gauche.png" alt="" width="10%"></a>
                                        </div>
                                        <div class="slide-deroulement"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!----mobile--deroulement d'un projet-->

                <div class="container-fluid pos-projet-mobile">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contain-slide">
                                <div class="blocHorizontal">
                                    <div class="slide-deroulement etape-gauche" id="deroulement-begin">
                                        <div class="row pos-block-img-deroulement">
                                            <div class="col-lg-12">
                                                <img src="./img/deroulement1.png" alt="" width="50%">
                                            </div>
                                            <h4>Etape 1</h4>
                                            <h4">Nous identifions ensemble vos besoins</h4>
                                        </div>
                                    </div>
                                    <div class="slide-deroulement etape-droite">
                                        <div class="row">
                                            <p>Pour vous accompagner dans votre projet, le premier rendez vous est
                                                l’occasion d’échanger sur vos besoins et vos idées. Cette première
                                                approche est primordial et nous pouvons l’organiser en
                                                physique(région
                                                lyonnaise), au téléphone ou en visio-conférence.</p>
                                            <br>
                                            <p>Ensemble nous allons définir les contours de votre site:</p>
                                            <ul>
                                                <li>la thématique général de votre site</li>
                                                <li>le public visé</li>
                                                <li>les contraintes</li>
                                                <li>les concurrents</li>
                                                <li>le calendrier envisagé pour la réalisation</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="slide-deroulement etape-gauche">
                                        <div class="row pos-block-img-deroulement">
                                            <div class="col-lg-12">
                                                <img src="./img/deroulement2.png" alt="" width="50%">
                                            </div>
                                            <h4>Etape 2</h4>
                                            <h4">Achat du nom de domaine et de l’hébergement</h4>
                                        </div>
                                    </div>
                                    <div class="slide-deroulement etape-droite">
                                        <div class="row">
                                            <p>Avant de débuter la création des maquettes, nous allons au préalable
                                                déposer le nom de votre site Web et lui trouver un hébergement.</p>
                                            <br>
                                            <p>Je vous proposerai plusieurs solutions d’hébergement. En priorité des
                                                hébergeurs performant et abordable ayant un engagement écologique et
                                                durable.</p>
                                        </div>
                                    </div>
                                    <div class="slide-deroulement etape-gauche">
                                        <div class="row pos-block-img-deroulement">
                                            <div class="col-lg-12">
                                                <img src="./img/deroulement3.png" alt="" width="50%">
                                            </div>
                                            <h4>Etape 3</h4>
                                            <h4">Création des maquettes Web</h4>
                                        </div>
                                    </div>
                                    <div class="slide-deroulement etape-droite">
                                        <div class="row">
                                            <p>Cette étape est importante afin de faciliter l’intégration de votre
                                                site
                                                Web.</p>
                                            <br>
                                            <p>Votre site est conçu pour vous refléter, il est donc essentiel
                                                qu’il soit entièrement personnalisé afin de vous démarquer de vos
                                                concurrents et qu’il respectent les bonnes pratiques d’expérience
                                                utilisateurs (UX).</p>
                                            <br>
                                            <p>Toutes les pages principales seront conçus sous forme de maquette
                                                (visuel). Nous validerons ensemble chaque page au fur et mesure de
                                                la
                                                création.</p>
                                        </div>
                                    </div>
                                    <div class="slide-deroulement etape-gauche">
                                        <div class="row pos-block-img-deroulement">
                                            <div class="col-lg-12">
                                                <img src="./img/deroulement4.png" alt="" width="50%">
                                            </div>
                                            <h4>Etape 4</h4>
                                            <h4">Intégration de votre site</h4>
                                        </div>
                                    </div>
                                    <div class="slide-deroulement etape-droite">
                                        <div class="row">
                                            <p>Une fois l’étape de la création des maquettes terminés et validés.
                                                Vient
                                                le moment de transformer ce travail en page Web.</p>
                                            <br>
                                            <p>L’intégration se
                                                fait
                                                tout en m’assurant que le rendu soit responsive (adapté pour
                                                ordinateur,
                                                tablette et téléphone).</p>
                                            <br>
                                            <p>Si vous le souhaitez, je pourrais vous transmettre un accès client
                                                afin
                                                de voir l’évolution du travail.</p>
                                        </div>
                                    </div>
                                    <div class="slide-deroulement etape-gauche">
                                        <div class="row pos-block-img-deroulement">
                                            <div class="col-lg-12">
                                                <img src="./img/deroulement5.png" alt="" width="50%">
                                            </div>
                                            <h4>Etape 5</h4>
                                            <h4">Test, référencement SEO et lancement de votre site</h4>
                                        </div>
                                    </div>
                                    <div class="slide-deroulement etape-droite">
                                        <div class="row">
                                            <p>Sur cette phase, nous allons effectuer un contrôle finale de la
                                                concordance entre le cahier des charges et le rendu de votre site.
                                            </p>
                                            <br>
                                            <p>Nous allons également tester les différentes fonctionnalités,
                                                l’optimisation du référencement naturel, l’aspect responsive et la
                                                vitesse de chargement.</p>
                                            <br>
                                            <p>Une fois cette étape réalisées, nous pourrons mettre votre site en
                                                ligne.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="slide-deroulement etape-gauche">
                                        <div class="row pos-block-img-deroulement">
                                            <div class="col-lg-12">
                                                <img src="./img/deroulement6.png" alt="" width="50%">
                                            </div>
                                            <h4>Etape 6</h4>
                                            <h4">Votre site est maintenant à vous !</h4>
                                        </div>
                                    </div>
                                    <div class="slide-deroulement etape-droite">
                                        <div class="row">
                                            <p>Je vous formerai à la prise en main de l’interface d’administration
                                                de
                                                votre site.</p>
                                            <br>
                                            <p>Vous pourrez ainsi gérer et editer vos contenus et être autonome sur les mise à jour.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!----mobile--deroulement d'un projet-->

                <div class="pos-section-besoin">
                    <div class="container-fluid title-pos-mobile" id="besoins">
                        <div class="row pos-title-section">
                            <div class="col-lg-2">
                                <img src="./img/mountain_white.png" alt="" style="width: 10vw" ;>
                            </div>
                            <h2 class="col-lg-10 section-dark">Vos besoins sont plus ciblee ?</h2>
                        </div>
                    </div>
                    <div class="row text-presta">
                        <div class="col-lg-12 pos-text-presta">
                            <h5 class="section-dark">Vous avez déjà un site Web et vous souhaitez bénéficier d'une prestation particulière ?</h5>
                            <h5 class="section-dark">Vous avez votre équipe Web et recherchez un prestataire pour une mission spécifique?</h5>
                            <h5 class="section-dark">N’hésitez pas à me faire part de vos projets spécifiques via le formulaire de contact en bas de page.</h5>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row pos-clefs">
                            <div class="col-lg-3 pos-row-clefs">
                                <div class="flip-card" tabIndex="0">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front flip-a">
                                            <h3>Création de concept visuel</h3>
                                        </div>
                                        <div class="flip-card-back flip-cadre">
                                            <p class="section-light">Vous souhaitez créer votre identité visuel?</p>
                                            <br>
                                            <p class="section-light">Elle joue un rôle essentiel dans la détermination de votre image de marque.
                                                Elle comprendra votre nom, votre logo, les couleurs, la typographie, les pictogrammes, la mise en page, les illustrations.
                                                Elle transmet tout aussi bien vos valeurs que la vision et l’activité de votre entreprise.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 pos-row-clefs">
                                <div class="flip-card" tabIndex="0">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front flip-d">
                                            <h3>Charte graphique</h3>
                                        </div>
                                        <div class="flip-card-back flip-cadre">
                                            <p class="section-light">Vous souhaitez établir votre charte graphique ?</p>
                                            <br>
                                            <p class="section-light">La charte graphique est le document de référence synthétisant l’ensemble de vos règles graphiques. Elle garantit la cohérence de votre identité visuelle sur tout les support employé :
                                                Disposition du logo sur vos cartes de visite, choix des couleurs, dispositions sur plaquette commercial etc…</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 pos-row-clefs">
                                <div class="flip-card" tabIndex="0">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front flip-c">
                                            <h3>Création de support</h3>
                                        </div>
                                        <div class="flip-card-back flip-cadre">
                                            <p class="section-light">Vous souhaitez un habillage graphique adapté à vos supports que ce soit du Web ou du print ?</p>
                                            <br>
                                            <p class="section-light">Ce type de travail peut tout à fait découler de la création de votre identité Web.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 pos-row-clefs">
                                <div class="flip-card" tabIndex="0">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front flip-a">
                                            <h3>Prise ou recherche de visuels</h3>
                                        </div>
                                        <div class="flip-card-back flip-cadre">
                                            <p class="section-light">Si vous créez un site vitrine, il est important de présenter votre société avec des photos de qualité, illustrant l’entreprise elle-même, les employés, les services proposés. Dans le cas d’un site e-commerce, il est indispensable de présenter vos produits sous toutes les coutures avec l'ensemble de leurs variations.</p>
                                            <p class="section-light">Je vous propose d’effectuer des prises de vues pour votre site ou d’adapter des visuels selon votre identitée.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pos-clefs">
                            <div class="col-lg-3 pos-row-clefs">
                                <div class="flip-card" tabIndex="0">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front flip-b">
                                            <h3>Webdesign UI / UX</h3>
                                        </div>
                                        <div class="flip-card-back flip-cadre">
                                            <p class="section-light">L’UI (Expérience visuel) est plus centré sur le visuel. Son objectif est d'attirer le regard de l'utilisateur, l'inciter à rester sur la page.</p>
                                            <p class="section-light">L’UX (Expérience utilisateur), sa mission : trouver aisément un contenu, utiliser facilement une interface Web ou mobile.</p>
                                            <br>
                                            <p class="section-light">Besoins de conseils ?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 pos-row-clefs">
                                <div class="flip-card" tabIndex="0">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front flip-c">
                                            <h3>Refonte de site Web</h3>
                                        </div>
                                        <div class="flip-card-back flip-cadre">
                                            <p class="section-light">Vous souhaitez donner un coup de neuf à votre site internet?</p>
                                            <br>
                                            <p class="section-light">Une refonte est parfois nécessaire pour optimiser votre visibilité sur les moteurs de recherche et attirer de nouveaux visiteurs.</p>
                                            <p class="section-light">Et c’est également l’occasion de lui redonner un design plus à la page.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 pos-row-clefs">
                                <div class="flip-card" tabIndex="0">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front flip-b">
                                            <h3>Ajout de fonctionnalisées sur un site existant</h3>
                                        </div>
                                        <div class="flip-card-back flip-cadre">
                                            <p class="section-light">Que ce soit sur une boutique e-commerce avec Prestashop ou sur un site vitrine avec Wordpress l’ajout de fonctionnalités à votre site peut être un atout stratégique.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 pos-row-clefs">
                                <div class="flip-card" tabIndex="0">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front flip-d">
                                            <h3>Création de Newletters</h3>
                                        </div>
                                        <div class="flip-card-back flip-cadre">
                                            <p class="section-light">Vous souhaitez fidéliser ou informer vos clients?</p>
                                            <p class="section-light">Une newsletter est un e-mail envoyé par une entreprise afin de diffuser largement des informations relatives à son activité. C'est un outil de communication qui s'adresse à une liste de destinataires ayant souscrit à l'envoi d'e-mails marketing volontairement, et qui reçoivent alors régulièrement ces mails.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-----------
    Section Portfolio
    ---------->
    <section class="portfolio section-position" id="portfolio">
        <div class="scroll-section-portfolio">
            <div class="container-fluid title-pos-mobile">
                <div class="row pos-title-section">
                    <div class="col-lg-2">
                        <img src="./img/mountain_black.png" alt="" style="width: 10vw" ;>
                    </div>
                    <h2 class="col-lg-10">La galerie</h2>
                </div>
            </div>
            <div class="row text-presta">
                <div class="col-lg-12 pos-text-presta">
                    <h5 class="section-dark">Ce portfolio regroupe certains projets web réalisés.</h5>
                    <h5 class="section-dark">Cliquez sur les miniatures afin d'avoir plus d'informations le développement de ces travaux.</h5>
                    <h5 class="section-dark">Cette section sera régulièrement mise à jour, je vous invite à venir la re-visiter de temps à autres !</h5>
                </div>
            </div>
            <div class="container-fluid pos-portfolio">
                <div class="row pos-card">
                    <div class="col-lg-4">
                        <button type="button" class="btn-card card-mozhell" data-bs-toggle="offcanvas" data-bs-target="#port_mozhell" aria-controls="staticBackdrop"></button>
                        <h6 class="col"><strong>Site Web de l'association Mozhell Production</strong></6>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn-card card-vigneron" data-bs-toggle="offcanvas" data-bs-target="#port_vigneron" aria-controls="staticBackdrop"></button>
                        <h6 class="col"><strong>Site Web domaine viticole 'La banquise'</strong></h6>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn-card card-tatoo" data-bs-toggle="offcanvas" data-bs-target="#port_tatoo" aria-controls="staticBackdrop"></button>
                        <h6 class="col"><strong>Site Web Artiste tatoueur et peintre tableaux et fresques 'Flow Purple
                                Art'</strong></h6>
                    </div>
                </div>
                <div class="row pos-card">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4">
                        <button type="button" class="btn-card card-spitzberg" data-bs-toggle="offcanvas" data-bs-target="#port_spitzberg" aria-controls="staticBackdrop"></button>
                        <h6 class="col"><strong>Site Web 'l'atelier du Spitzberg'</strong></h6>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn-card card-autres" data-bs-toggle="offcanvas" data-bs-target="#port_autres" aria-controls="staticBackdrop"></button>
                        <h6 class="col"><strong>Retrouvez ici certains de mes travaux</strong></h6>
                    </div>
                    <div class="col-lg-2"></div>
                </div>


                <!-----------Canvas et carousel Portfolio site Mozhell---------->

                <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="port_mozhell" aria-labelledby="staticBackdropLabel">
                    <div class="offcanvas-header">
                        <h2 class="offcanvas-title" id="staticBackdropLabel" style="color: #7f5e33;">Site Web de l'association Mozhell
                            Production</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="container-fluid">
                        <div class="row pos-canvas">
                            <div class="col-lg-3 canvas-side-left">
                                <div class="offcanvas-body">
                                    <div>
                                        <p>Site évenementiel intégré pour une association 'Mozhell Production' se trouvant à
                                            Sarreguemines dans le Grand Est</p>
                                        <br>
                                        <p>Caractéristique du site :</p>
                                        <ul>
                                            <li>Créé sur Wordpress</li>
                                            <li>Site one-page</li>
                                            <li>Billeterie en ligne</li>
                                            <li>Page contact</li>
                                        </ul>
                                        <br>
                                        <p>Retrouvez ce site à cette adresse :</p>
                                        <a href="https://mozhell.fr/">Site Mozhell</a>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 canvas-side-right">
                                <div class="offcanvas-body">
                                    <div id="carousel_mozhell" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel_mozhell" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel_mozhell" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel_mozhell" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#carousel_mozhell" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                            <button type="button" data-bs-target="#carousel_mozhell" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                            <button type="button" data-bs-target="#carousel_mozhell" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="./img/mozhell_home.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Section 'Home' du site mozhell.fr</h5>
                                                    <p class="section-dark"></p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/mozhell_billeterie.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Section 'billeterie' du site mozhell.fr</h5>
                                                    <p class="section-dark">La billeterie est intégré au site à partir de la plateforme de
                                                        vente de bille en ligne Weezevent.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/mozhell_contact.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Section 'contact' du site mozhell.fr</h5>
                                                    <p class="section-dark">Une adresse mail personnalisé est mis en place avec classement par sujet de demandes.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/mozhell_wireframe.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Wireframe</h5>
                                                    <p class="section-dark">Etude préalable : Plan du site avant maquettage.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/mozhell_charte-graphique.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Chate graphique</h5>
                                                    <p class="section-dark">Charte graphique fournit par un prestataire graphiste travaillant
                                                        avec l'association.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/mozhell_maquette.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Maquette</h5>
                                                    <p class="section-dark">Visuel de maquette fournit par un prestataire graphiste
                                                        travaillant avec l'association.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel_mozhell" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carousel_mozhell" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-----------Canvas et carousel Portfolio site Vigneron---------->

                <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="port_vigneron" aria-labelledby="staticBackdropLabel">
                    <div class="offcanvas-header">
                        <h2 class="offcanvas-title" id="staticBackdropLabel" style="color: #7f5e33;">Site Web domaine viticole 'La banquise'
                        </h2>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="container-fluid">
                        <div class="row pos-canvas">
                            <div class="col-lg-3 canvas-side-left">
                                <div class="offcanvas-body">
                                    <div>
                                        <p>Cette intégration est un projet de test non mis en ligne.</p>
                                        <br>
                                        <p>Le sujet de ce site vitrine est un domaine viticole désireux de mettre en avant son domaine et ses vins.</p>
                                        <p>Ce site n'est pas un site de e-commerce en soi, une section vente est néanmoins présent afin de proposer des produits.</p>
                                        <br>
                                        <p>Caractéristique du site :</p>
                                        <ul>
                                            <li>Créé sur Wordpress</li>
                                            <li>Ajout du module 'Woocommerce' pour proposer des produits à la vente.</li>
                                            <li>Gestion des produits via une interface administrateur intuitive.</li>
                                            <li>Création et gestion d'événements.</li>
                                            <li>Une page contact.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 canvas-side-right">
                                <div class="offcanvas-body">
                                    <div id="carousel_vigneron" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel_vigneron" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel_vigneron" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel_vigneron" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#carousel_vigneron" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                            <button type="button" data-bs-target="#carousel_vigneron" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                            <button type="button" data-bs-target="#carousel_vigneron" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                            <button type="button" data-bs-target="#carousel_vigneron" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="./img/vigneron-1.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Page d'accueil du site. 1 page / section 1</h5>
                                                    <p class="section-dark">La boutique est accessible à partir du menu en-tête.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/vigneron-2.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Page d'accueil du site. 1 page / section 2</h5>
                                                    <p class="section-dark">Les 3 thèmes de du site sont présentés sous forme de vignette cliquable : Les vins, le domaine, les evenements.</p>
                                                    <p class="section-dark">Chaque boutons amène à la page du site associée.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/vigneron-3.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Page d'accueil du site. 1 page / section 3</h5>
                                                    <p class="section-dark">Situation du domaine et lien vers la page 'contact'.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/vigneron-4.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">La boutique (côté site)</h5>
                                                    <p class="section-dark">Choix des vins proposés et mise au panier.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/vigneron-5.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">La boutique (côté administrateur)</h5>
                                                    <p class="section-dark">Gestion des produits proposés (ajout/supression, prix, quantité...).</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/vigneron-6.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Maquette</h5>
                                                    <p class="section-dark">Première ébauche du site avant intégration sur Wordpress.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/vigneron-7.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Logo</h5>
                                                    <p class="section-dark">Création du logo pour le domaine viticole.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel_vigneron" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carousel_vigneron" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-----------Canvas et carousel Portfolio site Tatoo---------->

                <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="port_tatoo" aria-labelledby="staticBackdropLabel">
                    <div class="offcanvas-header">
                        <h2 class="offcanvas-title" id="staticBackdropLabel" style="color: #7f5e33;">Site Web Artiste tatoueur et peintre
                            tableaux et fresques 'Flow Purple Art'</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="container-fluid">
                        <div class="row pos-canvas">
                            <div class="col-lg-3 canvas-side-left">
                                <div class="offcanvas-body">
                                    <div>
                                        <p>Site vitrine pour un artiste tatoueur du Grand Est proposant également ses
                                            services dans la peinture et la réalisation de fresque murale.</p>
                                        <p>Ce site est en cours de réalisation, je vous propose ici des pistes de
                                            réflexions quant à sa réalisation.</p>
                                        <br>
                                        <p>Caractéristique du site :</p>
                                        <ul>
                                            <li>Créé sur Wordpress</li>
                                            <li>Une page accueil amenant l'utilisateur à visiter une des 3 pages de
                                                l'artiste : 'tatouage', 'tableaux', et 'fresque'.</li>
                                            <li>Module de prise de contact en ligne.</li>
                                            <li>Prise en main du client pour la gestion des portfolios</li>
                                            <li>Une page de vente dans la section 'tableau'</li>
                                            <li>Une page contact</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 canvas-side-right">
                                <div class="offcanvas-body">
                                    <div id="carousel_tatoo" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="8" aria-label="Slide 9"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="9" aria-label="Slide 10"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="./img/1_tatoo_home1.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Page d'accueil du site. Partie 1</h5>
                                                    <p class="section-dark">Slide horizontal vers une page 'présentation de l'artiste'.</p>
                                                    <p class="section-dark">Slide vertical vers une page 'contact'.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/2_tatto_home2.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Page d'accueil du site. Partie 2</h5>
                                                    <p class="section-dark">3 boutons amenant aux 3 sections du site. Effet de retournement au survol de la souris.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/3_tatoo_homepage_tatoo.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Section 'tatouage'</h5>
                                                    <p class="section-dark">Une page réservé à la prestations de tatouages.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/4_tatoo_portfolio1.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Portfolio 'tatouage'. Partie 1</h5>
                                                    <p class="section-dark">Diaporama.</p>
                                                    <p class="section-dark">Gestion des classements et choix via l'interface administrateur.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/5_tatoo_portfolio2.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Portfolio 'tatouage'. Partie 2</h5>
                                                    <p class="section-dark">Classement par catégorie.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/6_tatoo_planning_front.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Calendrier de rendez-vous (côté site)</h5>
                                                    <p class="section-dark">Les utilisateurs peuvent prendre rendez-vous en fonction des créneaux disponibles.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/7_planning_back.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Calendrier de rendez-vous (côté administrateur)</h5>
                                                    <p class="section-dark">L'administrateur du site gère ses créneaux à partir de son interface.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/8_tatoo_maquette.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Maquette</h5>
                                                    <p class="section-dark">Création des visuels avant intégration.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/9_tatoo_font_color.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Choix de la typographie et des couleurs</h5>
                                                    <p class="section-dark">Effectué avant le maquettage, ce processus rentre en compte dans la création de la charte graphique.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/10_tatoo_btn_home.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Bouton présent sur la page d'accueil</h5>
                                                    <p class="section-dark">Bouton personnalisé créé sur Photoshop.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel_tatoo" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carousel_tatoo" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-----------Canvas et carousel Portfolio site Spitzberg---------->

                <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="port_spitzberg" aria-labelledby="staticBackdropLabel">
                    <div class="offcanvas-header">
                        <h2 class="offcanvas-title" id="staticBackdropLabel" style="color: #7f5e33;">Integration du site 'L'atelier du Spitzberg'</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="container-fluid">
                        <div class="row pos-canvas">
                            <div class="col-lg-3 canvas-side-left">
                                <div class="offcanvas-body">
                                    <div>
                                        <p>Le site sur lequel vous naviguez actuellement est dévellopé à la main en language html,css,javascript et php.</p>
                                        <p>Le souhait de ne pas passer par une solution plus rapide à été de ma laisser une liberté dans mes choix de disposition et de design sans m'inspirer d'un template prédéfinit et m'afranchir des contraintes de faisabilitées.</p>
                                        <br>
                                        <p>Et ça a été également un challenge!</p>
                                        <p>Les visuels prédominent sur ce site one-page, tout l'intêret est de trouver la balance avec le contenu qui prime, bien évidement.</p>
                                        <p>De plus d'adhérer à l'idée d'artisanat et de cabane en bois au pied d'une montagne tout en paraissant professionnel. Refletant ainsi le nom 'l'atelier du Spitzberg'.</p>
                                        <p></p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 canvas-side-right">
                                <div class="offcanvas-body">
                                    <div id="carousel_spitzberg" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="./img/spitzberg1-logo-mes.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Logo</h5>
                                                    <p class="section-dark">Une des 2 déclinaisons utilisée sur ce site (version montagne blanche / conçu pour fond sombre).</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/spitzberg3-ebauche1.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Première ébauche du design</h5>
                                                    <p class="section-dark">essai de rendu, de nom et de police.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/spitzberg4-ebauche2.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Second ébauche du design</h5>
                                                    <p class="section-dark">Le nom est définitif, la police et le design n'est pas représentatif de mes attentes.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/spitzberg5-home.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Troisième ébauche du design</h5>
                                                    <p class="section-dark">Ce design deviendra définitif pour le site.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/spitzberg6-maquette.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Maquettage du site</h5>
                                                    <p class="section-dark">Après avoir la ligne directrice avec le choix des polices, les couleurs et le design.</p>
                                                    <p class="section-dark">Le maquettage est effectué avant l'intégration.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/spitzberg2-code.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Intégration en html, css, javascript et php</h5>
                                                    <p class="section-dark">L'écriture du code est fait sous visual studio.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/spitzberg8-carte de visite.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Carte de visite</h5>
                                                    <p class="section-dark">Création de la carte de visite sur Photoshop.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/spitzberg-image7.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Choix des images</h5>
                                                    <p class="section-dark">Décision d'avoir une alternance entre des fonds clairs et foncés.</p>
                                                    <p class="section-dark">Toutes les photos sont libre de droits.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel_spitzberg" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carousel_spitzberg" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-----------Canvas et carousel Portfolio site Autres travaux---------->

                <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="port_autres" aria-labelledby="staticBackdropLabel">
                    <div class="offcanvas-header">
                        <h2 class="offcanvas-title" id="staticBackdropLabel" style="color: #7f5e33;">Retrouvez ici certains de mes travaux</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="container-fluid">
                        <div class="row pos-canvas">
                            <div class="col-lg-3 canvas-side-left">
                                <div class="offcanvas-body">
                                    <div>
                                        <p>Ces travaux ont été effectué pour différents projets d'étude.</p>
                                        <p>S'ils ne sont pas les plus représentatifs par rapport aux prestations proposées,</p>
                                        <p>Ils peuvent néanmoins avoir le mérite d'inspirer !</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 canvas-side-right">
                                <div class="offcanvas-body">
                                    <div id="carousel_autres" class="carousel slide">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carousel_tatoo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="8" aria-label="Slide 9"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="9" aria-label="Slide 10"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="10" aria-label="Slide 11"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="11" aria-label="Slide 12"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="12" aria-label="Slide 13"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="13" aria-label="Slide 14"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="14" aria-label="Slide 15"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="15" aria-label="Slide 16"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="16" aria-label="Slide 17"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="17" aria-label="Slide 18"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="18" aria-label="Slide 19"></button>
                                            <button type="button" data-bs-target="#carousel_autres" data-bs-slide-to="19" aria-label="Slide 20"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="./img/autres-alphabetise.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Alphabetise (Site pour une librairie enfant)</h5>
                                                    <p class="section-dark">Logo, choix des couleurs et de la typographie.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-alphabetise2.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Alphabetise (Site pour une librairie enfant)</h5>
                                                    <p class="section-dark">Logo dessiné sur Illustrator.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-bastide1.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">La bastide blanche (Complexe Hotel/Spa)</h5>
                                                    <p class="section-dark">Choix du logo final. Définition en 3 variantes.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-bastide2.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">La bastide blanche (Complexe Hotel/Spa)</h5>
                                                    <p class="section-dark">Choix du logo final.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-salkantay.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Affiche vintage</h5>
                                                    <p class="section-dark">Affiche décorative créé sur Illustrator.</p> 
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-oeil1.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Un oeil sur le monde (site de partage et vente de photographies) </h5>
                                                    <p class="section-dark">Page Home - visuel 1.</p>
                                                    <p class="section-dark">Intégration en html, css, javascript.</p>
                                                    <p class="section-dark">Projet pour le passage du titre professionnel de Webdesigner.</p>

                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-oeil2.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                <h5 class="section-dark">Un oeil sur le monde (site de partage et vente de photographies) </h5>
                                                    <p class="section-dark">Page Home - visuel 2.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-oeil3.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Maquette</h5>
                                                    <p class="section-dark">Présentation sous forme de diaporama.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-oeil4.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Mockup - représentation en responsive</h5>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-oeil6.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Charte Graphique</h5>
                                                    <p class="section-dark">Sommaire de la charte graphique.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-oeil7.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Un oeil sur le monde - Logo</h5>
                                                    <p class="section-dark">Placement logo et zone de sécurité.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-oeil8.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Un oeil sur le monde - Stratégie marketing digital</h5>
                                                    <p class="section-dark">Représentation du logo sur dives objets.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-oeil10.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Un oeil sur le monde - Wireframe</h5>
                                                    <p class="section-dark">Wireframe de la page d'accueil.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-carna1.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Projet d'habillement de caisse en bois</h5>
                                                    <p class="section-dark">Sur le thème du carnaval de venise. Travail effectué sur Illustrator et Photoshop.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-carna2.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                <h5 class="section-dark">Projet d'habillement de caisse en bois</h5>
                                                    <p class="section-dark">Sur le thème du carnaval de venise. Travail effectué sur Illustrator et Photoshop.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-carna3.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                <h5 class="section-dark">Projet d'habillement de caisse en bois</h5>
                                                    <p class="section-dark">Mise en place pour un post sur les réseaux sociaux.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres_slicehead.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Affiche type 'Slice Head'</h5>
                                                    <p class="section-dark">Affiche créé sur Photoshop.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-veloXP1.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                    <h5 class="section-dark">Velo XP - Depanage de cycles sur Lyon</h5>
                                                    <p class="section-dark">Page accueil du site.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-veloxp2.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                <h5 class="section-dark">Velo XP - Depanage de cycles sur Lyon</h5>
                                                    <p class="section-dark">Recherche de logo.</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./img/autres-veloxp3.png" class="pos-img-portfolio" alt="...">
                                                <div class="pos-caption">
                                                <h5 class="section-dark">Velo XP - Depanage de cycles sur Lyon</h5>
                                                    <p class="section-dark">Choix du logo définitif.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel_autres" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carousel_autres" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-----------
    Section Blog
    ---------->
    <section class="blog section-position" id="blog">
        <div class="scroll-section-blog">
            <div class="container-fluid title-pos-mobile">
                <div class="row pos-title-section">
                    <div class="col-lg-2">
                        <img src="./img/mountain_white.png" alt="" style="width: 10vw" ;>
                    </div>
                    <h2 class="col-lg-10 section-dark">Les reflexions du moment</h2>
                </div>
            </div>
            <div class="container-fluid pos-container-articles-blog">
                <div class="row">
                    <div class="col-lg-7 pos-text-article">
                        <div id="paginated-list" data-current-page="1" aria-live="polite">
                            <article class="block-article" id="d1">
                                <p class="blog-paragraphe">L’accessibilité aux connaissances et à la faisabilité de certaines tâches évoluent aussi vite qu’évoluent nos systèmes informatiques.</p>
                                <p class="blog-paragraphe">Si les encyclopédies de Diderot et d’Alembert sont définitivement remisées au placard.
                                    Nos compétences acquises et parfois longuement recherché à travers des sites spécialisés ne serait elle pas supplanté par une demande effectué à chatGPT ?</p>
                                <p class="blog-paragraphe">Ces outils nous remplaceront-ils demain, ou nous seront ils une aide précieuse?
                                    Ces questions qui font couler beaucoup d’encre sont légitimes. L’intelligence artificiel passionne et inquiète pour son potentiel.</p>
                                <p class="blog-paragraphe">En quelques points, une brève analyse à l’instant ’t’ de cette évolution dans le domaine informatique . </p>
                                <br>
                                <h5 class="blog-title" style="text-decoration:underline">Qu’est-ce que l’intelligence artificiel?</h5>
                                <br>
                                <p class="blog-paragraphe">Le terme « intelligence artificielle » a été créé en 1955 par John McCarthy.</p>
                                <p class="blog-paragraphe">En 1956, John McCarthy et ses collaborateurs ont organisé une conférence intitulée « Dartmouth Summer Research Project on Artificial Intelligence » qui a donné naissance au machine learning, au deep learning, aux analyses prédictives et, depuis peu, aux analyses prescriptives. Un nouveau domaine d'étude est également apparu : la science des données.</p>
                                <p class="blog-paragraphe">C’est une science visant à permettre aux machines de penser et d’agir comme des humains. Elle vise à doter un ordinateur d’une intelligence comparable à celle de l’humain.</p>
                                <h6 class="blog-subtitle">Pour se situer : Qu’est ce le machine Learning et le Deep Learning?</h6>
                                <p class="blog-paragraphe">Le Machine Learning : c’est un ensemble de techniques donnant la capacité aux machines d’apprendre automatiquement un ensemble de règles à partir de données. Contrairement à la programmation qui consiste en l’exécution de règles prédéterminées.</p>
                                <p class="blog-paragraphe">Le Machine Learning est au cœur même des moteurs de recommandation visant à améliorer l’expérience d’achat des clients et à leur fournir une interface personnalisée. Dans ce cas, les algorithmes traitent les points de données pour un client individuel, son historique d’achats par exemple, mais aussi d’autres jeux de données (stock actuel de l’enseigne, tendances démographiques, historiques d’achats d’autres clients) afin de déterminer les produits et les services à recommander à chacun.</p>
                                <br>
                                <p class="blog-paragraphe">Le Deep Learning ou apprentissage profond : c’est une technique de machine learning reposant sur le modèle des réseaux neurones: des dizaines voire des centaines de couches de neurones sont empilées pour apporter une plus grande complexité à l’établissement des règles.</p>
                                <p class="blog-paragraphe">Les IA à deep learning sont très efficaces pour les analyses d'images. Elles sont, par exemple, employées dans l'imagerie médicale pour détecter des maladies ou dans le secteur automobile dans le cas des voitures autonomes. Mais aussi pour les reconnaissances faciales comme sur les smartphones ou sur Facebook.</p>
                                <br>
                                <h5 class="blog-title" style="text-decoration:underline">Créer un site internet avec l’intelligence artificiel</h5>
                                <br>
                                <p class="blog-paragraphe">L’utilisation de l’IA pour la création de site web soulève également des questions plus profondes sur l’avenir de la conception web et de la technologie. </p>
                                <p class="blog-paragraphe">Est-elle en train de remplacer les concepteurs web ? </p>
                                <p class="blog-paragraphe">Ou est-ce qu’elle va simplement améliorer leur travail en leur permettant de se concentrer sur des tâches plus créatives ?</p>
                                <br>
                                <p class="blog-paragraphe">Les algorithmes d’IA sont effectivement de bons assistants dans la création de sites web, notamment pour :</p>
                                <ul>
                                    <li class="blog-list">Générer des lignes de code à partir de consignes en langage naturel </li>
                                    <li class="blog-list">Créer des interfaces et des designs</li>
                                    <li class="blog-list">Optimiser le référencement du site</li>
                                    <li class="blog-list">Tester et améliorer l’UX</li>
                                    <li class="blog-list">Générer du texte</li>
                                    <li class="blog-list">Développer des chatbots conversationnels</li>
                                </ul>
                                <p class="blog-paragraphe">Les créateurs de sites classiques font déjà économiser de nombreuses heures à ses utilisateurs(ex: Wordpress,Drupal,Magento,Prestashop…), mais son évolution : le créateur de site internet avec intelligence artificielle (IA) va encore plus loin. </p>
                                <p class="blog-paragraphe">L’outil utilise l’IA pour automatiser et optimiser le processus de création du site Web sur des tâches telles que : la rédaction de contenus, l’optimisation des positions de modules ou encore l’édition de designs.</p>
                                <p class="blog-paragraphe">En plus d’avoir tous les avantages d’un éditeur de sites classique, les modèles comme celui d’Hostinger sont capables d'apprendre les préférences de l'utilisateur et de suggérer des éléments de conception. Il est également possible de créer des sites Web à partir de zéro en fonction des informations fournies par l'utilisateur lors d’un questionnaire. </p>
                                <p class="blog-paragraphe">Bien que ces outils puissent rendre la création de sites Web (beaucoup) plus accessible, ils n’offrent pas exactement le même niveau de personnalisation et d’optimisation qu’en éditant son site en « mettant les mains dans le code ».</p>
                                <br>
                                <p class="blog-paragraphe">Certains points sortant du cadre de l’intelligence artificiel restent effectivement fondamentaux:</p>
                                <h6 class="blog-subtitle">L’analyse et la compréhension du contexte:</h6>
                                <p class="blog-paragraphe">Lors du début d’un projet, il est nécessaire de commencer par l’analyse du besoin et des enjeux. Cela implique une compréhension complète du brief, des attentes du client ainsi que des différentes contraintes techniques. Il est également important de prendre en compte le contexte du projet, notamment le secteur d’activité de l’entreprise ainsi que l’aspect concurrentiel.</p>
                                <h6 class="blog-subtitle">La liberté créative :</h6>
                                <p class="blog-paragraphe">La créativité du designer est liée à son expérience personnelle et à sa culture.</p>
                                <p class="blog-paragraphe">Les créateurs de sites Web basés sur l'IA génèrent rapidement des designs élégants basés sur des données spécifiques, ils offrent donc généralement moins de flexibilité en matière de personnalisation.</p>
                                <p class="blog-paragraphe">L'IA est conçue pour suivre des modèles d'apprentissage automatique, ce qui limite sa capacité à innover ou à créer de zéro. </p>
                                <p class="blog-paragraphe">Peut-être qu'à l'avenir, le rôle de l'homme dans un processus créatif sera réduit à la supervision, et que les outils IA se chargeront de l'exécution. C'est tout à fait possible, surtout dans le monde du design numérique. </p>
                                <p class="blog-paragraphe">Mais, on n’y est pas encore…</p>
                                <h5 class="blog-title" style="text-decoration:underline">Cout d’utilisation entre une solution traditionnel (type Wordpress) ou un créateur de site utilisant l’IA</h5>
                                <br>
                                <p class="blog-paragraphe">Le coût d’un site Web varies selon plusieurs critères: l’architecture du site, le design, les fonctionnalités.</p>
                                <p class="blog-paragraphe">Développer un site avec un outil traditionnel comme Wordpress sera peut être plus onéreux qu’un créateur utilisant l’IA car nécessitant des compétence et engageant plus de temps de développement.</p>
                                <p class="blog-paragraphe">Néanmoins, un site conçu via un créateur de site utilisant l’IA sera plus restrictif en termes de design et de fonctionnalité.</p>
                                <p class="blog-paragraphe">Les tarifications peuvent également augmenter avec l'ajout de thèmes premium, de plugins, d'hébergement et de la nécessité potentielle d'embaucher un développeur pour des personnalisations plus complexes.</p>
                                <p class="blog-paragraphe">Comme tout projet web, le coût dépendra du type de projet, de sa complexité, et des fonctionnalités souhaitées.</p>
                                <p class="blog-paragraphe">En général, si l’on prend l’aspect temps investi/compétences avec le coût réel d’un outil IA, les prix peuvent être similaires.</p>
                                <br>
                                <p class="blog-paragraphe">Le site d’hostinger proposant les 2 approches en services rapporte un article interessant sur le sujet : <a href="https://www.hostinger.fr/tutoriels/wordpress-vs-createur-de-sites"><button>Cliquez ici !</button></a></p>
                                <br>
                                <h5 class="blog-title" style="text-decoration:underline">En conclusion</h5>
                                <br>
                                <p class="blog-paragraphe">L’utilisation de l’IA pour la création de site web peut offrir des avantages considérables en termes de personnalisation, de rapidité et de référencement.</p>
                                <p class="blog-paragraphe">Cette technologie est également une aide afin de se libérer de certaines opérations de routine, de laisser plus de temps pour expérimenter et trouver des solutions non conventionnelles.</p>
                                <p class="blog-paragraphe">Ces outils ne sont donc pas à considérer comme une menace, mais comme une opportunité de s'améliorer et d'être plus efficaces.</p>
                                <p class="blog-paragraphe">Cependant, il est important de comprendre que l’IA ne peut pas tout faire. Les concepteurs web restent essentiels pour créer des sites web professionnels et fonctionnels.</p>
                                <br><br><br>
                                <h6 class="blog-subtitle">Les sources utilisées pour cet article :</h6>
                                <ul>
                                    <li class="blog-list"><a href="https://datascientest.com/quelle-difference-entre-le-machine-learning-et-deep-learning">Site datascientist</a></li>
                                    <li class="blog-list"><a href="https://www.netapp.com/fr/artificial-intelligence/what-is-artificial-intelligence/">Site netapp</a></li>
                                    <li class="blog-list"><a href="https://www.hostinger.fr/tutoriels/wordpress-vs-createur-de-sites">Site hostinger</a></li>
                                    <li class="blog-list"><a href="https://digipulse.ch/les-avantages-de-lutilisation-de-lintelligence-artificielle-pour-la-creation-de-site-web/">Site digipulse</a></li>
                                    <li class="blog-list"><a href="https://www.clubic.com/hostinger/guide-479620-createur-de-sites-internet-ia-vs-createur-de-sites-internet-traditionnel-quelles-sont-les-differences-cles.html">Site clubic</a></li>
                                    <li class="blog-list"><a href="https://byothe.fr/creer-son-site-web-avec-ia-est-ce-possible/">Site byothe</a></li>
                                    <li class="blog-list"><a href="https://black.bird.eu/fr/blog/la-ia-va-t-elle-remplacer-les-designers-">Site black.bird</a></li>
                                </ul>
                            </article>

                            <article class="block-article" id="d2">
                                <p class="blog-paragraphe">Je vous propose ci dessous 9 points qui peuvent faire pencher la balance dans votre décision.</p>
                                <p class="blog-paragraphe">Vous trouverez en fin d'article les sources ainsi que des articles analysant ces 2 démarches.</p>
                                <h5 class="blog-title" style="text-decoration:underline">Le gain de temps</h5>
                                <br>
                                <p class="blog-paragraphe">Le fait de contractualiser avec un freelance permet de gagner du temps à toutes les étapes du processus. Pas besoin d’effectuer de nombreux tours d’entretiens de validations pour un freelance. Faites le rencontrer son manager direct afin de discuter et voir si la collaboration peut faire sens. </p>
                                <p class="blog-paragraphe">La partie contractuelle est aussi plus rapide que pour le contrat d’un salarié, vous n’avez rien à déclarer à l’URSSAF. La relation qui vous lie au freelance est uniquement un contrat de prestation commerciale. Vous pourrez trouver des modèles prêts-à-l’emploi à télécharger en ligne pour ce type de prestation.</p>
                                <br>
                                <h5 class="blog-title" style="text-decoration:underline">La maitrise sur votre budget</h5>
                                <br>
                                <p class="blog-paragraphe">Un indépendant vient renforcer votre équipe pour une période fixe et déterminée. Son tarif journalier est celui que vous avez négocié avec lui.</p>
                                <p class="blog-paragraphe">L’accès à des freelances permet donc d’avoir une plus grande flexibilité sur votre budget.</p>
                                <p class="blog-paragraphe">Le recours à des freelances juniors, ou peu expérimentés, peu aussi être un bon moyen d’accéder à une expertise à moindre prix.</p>
                                <br>
                                <h5 class="blog-title" style="text-decoration:underline">Palliez à un pic d'activité temporaire</h5>
                                <br>
                                <p class="blog-paragraphe">Palliez à un pic d'activité temporaire
                                    Le recours à un freelance devient de plus en plus la solution numéro 1 des entreprises lors d’un pic d’activité temporaire. </p>
                                <p class="blog-paragraphe">Plus simple à mettre en place qu’un CDD et moins contraignant qu’un CDI, le recours à un freelance permet d’avoir accès à une main d’ouvre ultra-qualifiée à un tarif que vous négociez vous-même.</p>
                                <p class="blog-paragraphe">La prestation en assistance technique (aussi appelé “en régie”) est le mode de fonctionnement le plus adapté pour faire face à un pic d’activité temporaire.</p>
                                <br>
                                <h5 class="blog-title" style="text-decoration:underline">Moins de risque si le projet ne fonctionne pas</h5>
                                <br>
                                <p class="blog-paragraphe">Cet avantage s’applique principalement dans le cadre d’une startup faisant appel à des freelances afin de l’aider à développer son projet. </p>
                                <p class="blog-paragraphe">Si votre startup fait faillite et vous ne réussissez pas à vous imposer sur votre marché, il est beaucoup plus simple de se séparer d’un indépendant plutôt que d’un salarié en CDI. Cela peut vous coûter très cher. </p>
                                <br>
                                <h5 class="blog-title" style="text-decoration:underline">Bénéficiez des conseils d'un véritable expert de son domaine</h5>
                                <br>
                                <p class="blog-paragraphe">Les freelances se lancent généralement à leur compte car ce sont de véritables passionnés de leur domaine d’expertise. Ils adorent apprendre d’eux même afin de progresser et rester à la pointe de la technologie. En collaborant avec un freelance, vous pouvez être sûr de bénéficier de l’expertise d’un consultant expérimenté et passionné.</p>
                                <p class="blog-paragraphe">Gardez en tête que la mission d’un freelance reste de conseiller son client avant toute chose. </p>
                                <br>
                                <h5 class="blog-title" style="text-decoration:underline">Accédez au réseau de votre freelance</h5>
                                <br>
                                <p class="blog-paragraphe">Un freelance est souvent un expert d’un domaine très précis. Les freelances ont de plus en plus tendance à devenir ultra-spécialiste. </p>
                                <p class="blog-paragraphe">Les développeurs full-stack qui vont développer la partie front & back d’un site web tout en assurant son déploiement ainsi que la mise en production sont de plus en plus rares. Ou alors ils vont plutôt opérer sur des projets de petite envergure. Aujourd’hui, les développeurs freelances sont principalement spécialisés soit sur du front-end, soit sur du back-end. </p>
                                <p class="blog-paragraphe">Étant donné qu’il sont hyper-spécialisés, il est dans leur intérêt d’avoir un réseau afin d’accompagner leurs clients dans l’intégralité de leur projet. De cette manière, ils peuvent conseiller leurs clients et les rediriger vers certaines de leurs connaissances freelances possédant des expertises complémentaires. </p>
                                <br>
                                <h5 class="blog-title" style="text-decoration:underline">La motivation sans faille du freelance</h5>
                                <br>
                                <p class="blog-paragraphe">N’oubliez pas que contrairement à un salarié, le freelance cherchera toujours à tout faire pour vous satisfaire car vous êtes son client et il souhaite vous fidéliser pour augmenter son chiffre d’affaires.</p>
                                <p class="blog-paragraphe">Le freelance possèdera donc toujours ce surplus de motivation par rapport à un salarié. </p>
                                <br>
                                <h5 class="blog-title" style="text-decoration:underline">Pas de charges sociales ni de congés à financer</h5>
                                <br>
                                <p class="blog-paragraphe">Pour rappel, un contrat avec un indépendant/freelance est une prestation commerciale. Le freelance ne représente donc pas un salarié à la charge de votre entreprise. Vous n’aurez donc pas de charges sociales ni de congés à payer. </p>
                                <br>
                                <h5 class="blog-title" style="text-decoration:underline">Le paiement peut dépendre directement de la réussite de son projet</h5>
                                <br>
                                <p class="blog-paragraphe">Dans le cadre d’une prestation au forfait, un livrable très précis est attendu en fin de projet. C’est la livraison de ce livrable qui va conditionner le paiement du prestataire. Attention cependant à bien définir les conditions de paiement dans le contrat que vous avez établi au début de la prestation.</p>
                                <br><br><br>
                                <h6 class="blog-subtitle">Sources est liens concernant cet article :</h6>
                                <ul>
                                    <li class="blog-list"><a href="https://www.kicklox.com/blog-client/avantages-a-travailler-avec-un-freelance-2022/">Site kicklox</a></li>
                                    <li class="blog-list"><a href="https://asana.com/fr/resources/freelance">Site asana</a></li>
                                    <li class="blog-list"><a href="https://www.cacomptepourmoi.fr/blog/paie-rh/gerer-les-entrees-et-sorties-de-ses-salaries/3-avantages-a-travailler-avec-un-freelance/">Site ça compte pour moi</a></li>
                                    <li class="blog-list"><a href="https://www.malt.fr/resources/article/7-avantages-de-recruter-et-travailler-avec-les-freelances">Site malt</a></li>
                                    <li class="blog-list"><a href="https://lp-designs.fr/avantages-embaucher-freelance/">Site lp design</a></li>
                                </ul>
                            </article>
                            <article class="block-article" id="d3">
                                <p class="blog-paragraphe">1 % pour la planète (en anglais « 1% for the Planet ») est un mouvement mondial porté par des entreprises qui ont décidé de donner 1 % de leur chiffre d'affaires à des associations de préservation de l'environnement. Plus de 2 500 entreprises sont membres de ce mouvement.</p>
                                <br>
                                <h5 class="blog-title" style="text-decoration:underline">Historique</h5>
                                <br>
                                <p class="blog-paragraphe">Le mouvement a été lancé en 2001 par les américains Yvon Chouinard, fondateur de l'entreprise californienne de vêtements Patagonia, et Craig Mathews de l'entreprise d'équipements de pêche à la mouche Blue Ribbon Flies de West Yellowstone (Montana). Leurs entreprises respectives donnaient déjà une partie de leur chiffre d'affaires annuel sans que cela ait affecté négativement leur business1. Ils décident de créer ce réseau afin de convaincre des entreprises à s'engager dans la philanthropie environnementale. 2 500 entreprises font partie de ce mouvement.</p>
                                <p class="blog-paragraphe">Comme la promesse de dons est basée sur le chiffre d'affaires et non sur le bénéfice net, les entreprises doivent honorer leur engagement même si les résultats annuels sont mauvais.</p>
                                <p class="blog-paragraphe">Le cumul des dons depuis la création du mouvement est de plus de 220 millions de dollars.</p>
                                <p class="blog-paragraphe">L'association américaine, basée à Burlington (Vermont) a ouvert un fonds de dotation en France en 2014, activé fin 2015 et basé en Haute-Savoie.</p>
                                <p class="blog-paragraphe">Le choix du montant de 1 % s'explique par le fait que les entreprises américaines peuvent bénéficier à cette hauteur d'avantages fiscaux.</p>
                                <br><br><br>
                                <h6 class="blog-subtitle">Sources est liens concernant cet article :</h6>
                                <ul>
                                    <li class="blog-list"><a href="https://fr.wikipedia.org/wiki/1_%25_pour_la_plan%C3%A8te">Site wikipedia</a></li>
                                    <li class="blog-list"><a href="https://www.onepercentfortheplanet.fr/">Site onepercentfortheplanet</a></li>
                                </ul>

                            </article>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-3 pos-title-article">
                        <p>Article 1:</p>
                        <div class="titre-article1" id="titleart1">
                            <h4>L’intelligence artificiel et la création de site Web</h4>
                        </div>
                        <p>Article 2:</p>
                        <div class="titre-article2" id="titleart2">
                            <h4>Les avantages de travailler avec un prestataire Freelance</h4>
                        </div>
                        <p>Article 3:</p>
                        <div class="titre-article3" id="titleart3">
                            <h4>Autour de 1% for the planet</h4>
                        </div>
                    </div>
                    <div class="pagination-container">
                        <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
                            &lt;
                        </button>
                        <div id="pagination-numbers"></div>
                        <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
                            &gt;
                        </button>
                    </div>
                </div>
            </div>
    </section>
    <!-----------
    Section Contact
    ---------->
    <section class="contact section-position" id="contact">
        <div class="scroll-section-contact">
            <div class="container-fluid title-pos-mobile">
                <div class="row pos-title-section">
                    <div class="col-lg-2">
                        <img src="./img/mountain_black.png" alt="" style="width: 10vw" ;>
                    </div>
                    <h2 class="col-lg-10">Restons en contact</h2>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <?php include './formulaire.php' ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <p class="footer">© L'atelier du Spitzberg 2023</p>
    </footer>
</body>
<script src="./scripts/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>

</html>