<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
  <!-- STYLE -->
  <link rel="stylesheet" href="public/css/main.css">

  <!-- POLICE -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@300;400;700;800&family=Oswald:wght@200&family=Teko&display=swap" rel="stylesheet">
  <title>MonPortfolio</title>
</head>

<!-- HEADER -->
<section id="SectionHeader" class="container fixed-top">
  <header class="row">
    <div class="col-6 d-flex justify-content-center align-items-center">
      <a id="lienIcnHome" href="#Home"><iconify-icon id="IcnHome" class="hover" icon="material-symbols:home-outline-rounded" style="color: #7e80ba;" width="30" height="30"></iconify-icon></a>
      <a id="lienIcnProfile" href="#Profile"><iconify-icon id="IcnProfile" class="hover" icon="mdi:user-outline" style="color: #7e80ba;" width="30" height="30"></iconify-icon></a>
      <a id="lienIcnProjects" href="#Projects"><iconify-icon id="IcnProjects" class="hover" icon="material-symbols:work-outline" style="color: #7e80ba;" width="30" height="30"></iconify-icon></a>
    </div>
    <div class="col-6 d-flex justify-content-center align-items-center">
      <iconify-icon id="siteApparence" class="hover" icon="material-symbols:bedtime" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
      <div id="ContactMe" class="button-bg-blue d-flex align-items-center">
      <iconify-icon icon="material-symbols:add-circle-outline" style="color: #7e80ba;" width="20" height="20"></iconify-icon>
        Me contacter
      </div>
    </div>
  </header>
</section>

<body>



<!-- Base url pour JS -->
<input style="opacity: 0;" type="text" name="" id="baseUrl" value="">



<div id="alerts" class="container txt-green text-center mb-3" style="display: none;"></div>

<!-- MODALS IMG CREATION CULINAIRE -->
<div id="modalImgCuisine" class="modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <img src="public/img/cuisine/img1.JPG" alt="">
        </div>
    </div>
</div>

<!-- ME CONTACTER -->
<section id="Contact" class="container p-5" style="display: none;">

    <div class="d-flex justify-content-start align-items-center mt-3">
        <iconify-icon icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
        <h2>Me contacter</h2>
    </div>

    <form id="FormContact" action="" class="d-flex flex-column justify-content-center align-items-center">
        <label for="adressMail">Votre adresse mail, que je puisse vous répondre</label>
        <input class="pt-2 pb-2 mb-3" type="text" name="adressMail" id="adressMail">
        <p id="errorAdressMail" class="errorFormMail"></p>
        <label for="titleMail">Titre du message</label>
        <input class="pt-2 pb-2 mb-3" type="text" name="titleMail" id="titleMail">
        <p id="errorTitleMail" class="errorFormMail"></p>
        <label for="contentMail">Contenu</label>
        <textarea name="contentMail" id="contentMail" cols="30" rows="10"></textarea>
        <p id="errorContentMail" class="errorFormMail"></p>
        <button id="submitFormContact" type="submit" class="mt-3 mb-3 button-bg-green d-flex justify-content-center align-items-center txt-green">
            <iconify-icon icon="material-symbols:send" style="color: #23ba4d;" width="20" height="20"></iconify-icon>
            Envoyer
        </button>
        <button type="button" id="closeFormContact" class="mt-3 mb-3 button-bg-red d-flex justify-content-center align-items-center txt-green">
            <iconify-icon icon="charm:cross" style="color: #6C0000;" width="20" height="20"></iconify-icon>
            Fermer
        </button>
    </form>

</section>

<!-- HOME -->
<section id="Home" class="container p-5">

    <div class="row d-flex justify-content-end">
        <div class="col-6 button-bg-green d-flex justify-content-center align-items-center txt-green">
            <iconify-icon icon="tabler:point-filled" style="color: #23BA4D;" width="20" height="20"></iconify-icon>
            Disponnible immédiatement
        </div>
    </div>

    <div class="d-flex justify-content-start align-items-center mt-3">
        <iconify-icon icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
        <h2 id="titleHome">Développeur web</h2>
    </div>

    <div id="ContenuHome" class="row mt-3 ms-3">
        <div class="col-6">
            <h3 class="fw-bold">Je suis Quentin Van den Ende</h3>
            <p>
                Jeune développeur passionné d'informatique en reconversion professionnelle.
            </p>
            <p>
                mon expérience de 14 ans en cuisine m'a doté d'atouts essentiels pour aborder ce nouveau chapitre de ma
                carrière. En tant que cuisinier, j'ai développé une grande endurance, une concentration aiguisée, ainsi
                qu'une remarquable capacité d'adaptation. J'ai également acquis la compétence de gérer le stress,
                d'accepter les critiques et de me remettre en question lorsque c'est nécessaire. Je déteste l'injustice,
                je suis créatif et honnête.
            </p>
            <p>
                En tant qu'autodidacte, j'aime apprendre, découvrir de nouvelles choses et les partager avec les autres.
            </p>
        </div>
        <div class="col-6 d-flex justify-content-center align-items-center">
            <div class="cercle-profil d-flex justify-content-center align-items-center">
                <img id="imgProfil" src="public/img/my_logo.png" alt="">
            </div>
        </div>
    </div>

</section>

<!-- PROFILE DEVELOPPEUR -->
<section id="Profile" class="container p-5">

    <div class="d-flex justify-content-start align-items-center mt-3">
        <iconify-icon icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
        <h2>Profil</h2>
    </div>

    <div class="ms-3">
        <div>
            <h4 class="fw-bold mt-3">CONTACT</h4>
            <div class="barre-bas"></div>
        </div>
        <div class="row mt-1">
            <div class="col-md-12 d-flex">
                <iconify-icon class="me-5" icon="ph:phone" style="color: #7e80ba;" width="30" height="30"></iconify-icon>
                <p>00336 7137 8609</p>
            </div>
            <div class="col-md-12 d-flex">
                <iconify-icon class="me-5" icon="fe:mail" style="color: #7e80ba;" width="30" height="30"></iconify-icon>
                <p>qtvdende@gmail.com</p>
            </div>
            <div class="col-md-12 d-flex">
                <iconify-icon class="me-5" icon="humbleicons:location" style="color: #7e80ba;" width="30" height="30"></iconify-icon>
                <p>Arles, France</p>
            </div>
            <div class="col-md-12 d-flex">
                <iconify-icon class="me-5" icon="ri:profile-line" style="color: #7e80ba;" width="30" height="30"></iconify-icon>
                <p>https://www.linkedin.com/in/quentin-van-den-ende-9a9a9213a/</p>
            </div>
        </div>
        <div>
            <h4 class="fw-bold mt-1">COMPETENCES</h4>
            <div class="barre-bas"></div>
        </div>
        <div class="row mt-1">
            <div class="col-md-6">
                <h5 class="fw-bold mt-1">FRONT-END</h5>
                <p>HTML</p>
                <p>CSS</p>
                <p>JavaScript</p>
                <p>JQuery</p>
            </div>
            <div class="col-md-6">
                <h5 class="fw-bold mt-1">BACK-END</h5>
                <p>PHP</p>
                <p>CodeIgniter</p>
            </div>
        </div>
        <div>
            <h4 class="fw-bold mt-1">CENTRE D' INTERETS</h4>
            <div class="barre-bas"></div>
        </div>
        <div class="col-md-12">
            <p>Musique</p>
            <p>Jeux Videos</p>
            <p>Sport</p>
        </div>
        <div>
            <h4 class="fw-bold mt-1">EXPERIENCE PROFESSIONNELLES</h4>
            <div class="barre-bas"></div>
        </div>
        <h5 class="fw-bold mt-1">DEVELOPPEMENT WEB</h5>
        <div class="d-flex justify-content-start align-items-center ms-3 mt-1">
            <iconify-icon icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
            Juillet 2022 -> Juillet 2023. Formation Développeur web et web mobile - Résurgences.
            Chantier d’insertion.
        </div>
        <h5 class="fw-bold mt-1">CUISINE</h5>
        <button id="btnVoirMesExperiences" class="col-md-3 button-bg-blue d-flex justify-content-center align-items-center txt-default">
            <iconify-icon icon="material-symbols:add-circle-outline" style="color: #7e80ba;" width="20" height="20"></iconify-icon>
            Voir mes expériences
        </button>
    </div>

</section>

<!-- PROFILE CUISINIER -->
<section id="ProfileCuisine" class="container p-5" style="display: none;">
    <div>
        <h4 class="fw-bold mt-1">ETUDES</h4>
        <div class="barre-bas"></div>
    </div>
    <div class="col">
        <div class="d-flex justify-content-start align-items-center mt-3">
            <iconify-icon class="me-5" icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
            <div>
                <p>2006->2009</p>
                <p>Ecole Hôtelière Provinciale de Namur (Belgique)</p>
            </div>
        </div>

    </div>
    <div>
        <h4 class="fw-bold mt-1">EXPERIENCES PROFESSIONNELLES</h4>
        <div class="barre-bas"></div>
    </div>
    <div class="col">
        <div class="d-flex justify-content-start align-items-center mt-3">
            <iconify-icon class="me-5" icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
            <div>
                <p>2009->2014</p>
                <p>Alternance Cuisine (apprenti et commis de cuisine) Golf, Château de la Tournette (Nivelles)</p>
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-center mt-3">
            <iconify-icon class="me-5" icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
            <div>
                <p>2015->2016</p>
                <p>Chef de partie froid</p>
                <p>Restaurant Maximus (Nivelles)</p>
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-center mt-3">
            <iconify-icon class="me-5" icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
            <div>
                <p>2016->2017</p>
                <p>Chef de partie froid</p>
                <p>Brasserie la vie parisienne (Nivelles)</p>
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-center mt-3">
            <iconify-icon class="me-5" icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
            <div>
                <p>2017->2018</p>
                <p>Chef de cuisine</p>
                <p>Restaurant my red tractor (specialité locales, burgers maison et microbraserie) (Lillois)</p>
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-center mt-3">
            <iconify-icon class="me-5" icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
            <div>
                <p>2019->2021</p>
                <p>Chef de partie et chef de cuisine contrat saisonnier (2 saisons)</p>
                <p>Le mas d’aigret (Baux de Provence)</p>
            </div>
        </div>
        <button id="btnProfilDeveloppeur" class="col-md-3 button-bg-blue d-flex justify-content-center align-items-center txt-default">
            <iconify-icon icon="material-symbols:add-circle-outline" style="color: #7e80ba;" width="20" height="20"></iconify-icon>
            Retour au profil Développeur
        </button>
    </div>
</section>

<!-- QUELQUES CREATIONS CUISINE -->
<section id="Creations" class="container p-5" style="display: none;">
    <div class="d-flex justify-content-start align-items-center mt-3">
        <iconify-icon icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
        <h2>Quelques-unes de mes créations</h2>
    </div>
    <div id="ContenuCreation" class="row box-blue d-flex flex-wrap justify-content-between align-items-center p-5">
        <div class="row mt-3 mb-3">
            <div class="col-md-3 picture">
                <img src="public/img/cuisine/img1.JPG" alt="">
            </div>
            <div class="col-md-3 picture">
                <img src="public/img/cuisine/img2.JPG" alt="">
            </div>
            <div class="col-md-3 picture">
                <img src="public/img/cuisine/img3.JPG" alt="">
            </div>
            <div class="col-md-3 picture">
                <img src="public/img/cuisine/img4.JPG" alt="">
            </div>
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-md-3 picture">
                <img src="public/img/cuisine/img5.JPG" alt="">
            </div>
            <div class="col-md-3 picture">
                <img src="public/img/cuisine/img6.JPG" alt="">
            </div>
            <div class="col-md-3 picture">
                <img src="public/img/cuisine/img7.JPG" alt="">
            </div>
            <div class="col-md-3 picture">
                <img src="public/img/cuisine/img8.JPG" alt="">
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3 mb-3">
            <div class="col-md-3 picture">
                <img src="public/img/cuisine/img9.JPG" alt="">
            </div>
            <div class="col-md-3 picture">
                <img src="public/img/cuisine/img10.JPG" alt="">
            </div>
        </div>
    </div>

</section>

<!-- PROJECTS -->
<section id="Projects" class="container p-5">

    <div class="d-flex justify-content-start align-items-center mt-3">
        <iconify-icon icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
        <h2>Projets</h2>
    </div>

    <!-- Projet 1 -->
    <div id="ContenuProjects" class="row box-blue d-flex flex-column justify-content-center align-items-center p-5">
        <div class="col d-flex justify-content-center align-items-center">
            <div class="cadre-projet-img d-flex justify-content-center align-items-center">
                <img class="test" src="public/img/projet_jouer_ensemble.png" alt="">
            </div>
        </div>
        <div class="col">
            <div class="d-flex justify-content-center align-items-center mt-3">
                <iconify-icon icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
                Projet pour le titre professionnel : Développeur web et web mobile (version local)</br>
                Site de rencontres entre musiciens</br>
                Résurgence formation (chantier d'insertion)
            </div>
        </div>
    </div>

    <!-- Projet 2 -->
    <div id="ContenuProjects2" class="row box-blue d-flex flex-column justify-content-center align-items-center p-5 mt-1">
        <div class="col projetDevHover d-flex justify-content-center align-items-center">
            <a href="https://www.parade-arles.org/" target="_blank">
                <div class="cadre-projet-img d-flex justify-content-center align-items-center">
                    <img class="test" src="public/img/projet_parade.png" alt="">
                </div>
            </a>
        </div>
        <div class="col">
            <div class="d-flex justify-content-center align-items-center mt-3">
                <iconify-icon icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
                Site Parade (Arles FR)</br>
                Résurgences production (chantier d'insertion)
            </div>
        </div>
    </div>

</section>




<!-- FOLLW ME -->
<section id="FollowMe" class="container d-flex justify-content-between align-items-center">

    <div class="d-flex justify-content-start align-items-center ms-5">
        <iconify-icon icon="tabler:point-filled" style="color: #7e80ba;" width="25" height="25"></iconify-icon>
        <h2>Suivez-moi sur les réseaux sociaux</h2>
    </div>

    <div class="d-flex-column justify-content-start align-items-center me-5">
        <iconify-icon class="hover" icon="mdi:github" style="color: #7e80ba;" width="30" height="30"></iconify-icon>
        <iconify-icon class="hover" icon="ic:baseline-facebook" style="color: #7e80ba;" width="30" height="30"></iconify-icon>
        <iconify-icon class="hover" icon="mdi:instagram" style="color: #7e80ba;" width="30" height="30"></iconify-icon>
    </div>

</section>

<!-- FOOTER -->
<section id="Footer" class="container p-5">
    <footer class="d-flex justify-content-center align-items-center">
        <iconify-icon icon="ic:baseline-copyright" style="color: #7e80ba;" width="20" height="20"></iconify-icon>
        Van den Ende Quentin, 2023. 
    </footer>
</section>

                                    <!-- SCRIPTS -->
<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

<!-- ICONIFY -->
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

<!-- SCRIPTS -->
<script src="public/js/main.js"></script>

</body>
</html>
