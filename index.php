<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV digital développeur web</title>
    <link href="public/styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/71a301ad0d.js" crossorigin="anonymous"></script>
</head>
<body class="flex justify-center">
    <?php
    include_once('elements.php'); 
    ?>
    <div class="wrapperTailwind flex text-lg p-9"><!-- wrapper de contenu tailwindcss -->
        <main class="colonneGauche w-2/3 flex flex-col justify-between">
            <section class="flex flex-row justify-between items-center p-2">
                <div class="presentation flex flex-row items-center">
                    <img class="m-3" src="./img/id.jpg" alt="photo de profil"/>
                    <h1 class="text-4xl ml-5"><span class="text-4xl font-bold uppercase">David BEAUMONT</span>
                    <br>Développeur web junior</h1>
                </div>
                <div class="links flex flex-col p-5">
                    <div class="github">
                        <a href="https://github.com/davidbeaumont" class="flex flex-row m-3">
                            <i class="fa-brands fa-github mx-3"></i>
                            <p>/davidbeaumont</p>    
                        </a>
                    </div>
                    <div class="linkedIn">
                        <a href="https://www.linkedin.com/in/beaumont-david/" class="flex flex-row m-3">
                            <i class="fa-brands fa-linkedin mx-3"></i>
                            <p>/beaumont-david</p>
                        </a>
                    </div>    
                </div>
            </section>
            <section class="infos grid grid-cols-2 grid-rows-2">
                <a href="http://davidbeaumont.site" class="flex flex-row m-2">
                    <i class="fa-solid fa-link mx-3"></i>
                    <p>portfolio <i class="fa-solid fa-arrow-right text-sm"></i> davidbeaumont.site</p>
                </a>
                <a href="" class="flex flex-row m-2">
                    <i class="fa-solid fa-house-laptop mx-3"></i>
                    <p>Télétravail ou présentiel</p>                
                </a>
                <a href="" class="flex flex-row m-2">
                    <i class="fa-solid fa-house mx-3"></i>
                    <p>49300 CHOLET</p>
                </a>
                <a href="" class="flex flex-row m-2">
                    <i class="fa-solid fa-location-dot mx-3"></i>
                    <p>Temps plein</p>                
                </a>
            </section>
            <section class="formation">
                <h2 class="text-2xl font-semibold mb-3">Diplômes et Formations</h2>
                <div class="m-3">
                    <h3 class="text-lg font-semibold">Formation développeur WordPress (niveau 5 - Bac+2)</h3>
                    <p class="ml-6">D'avril 2023 à décembre 2023 <strong>OpenClassrooms</strong> en distanciel
                    </p>
                </div>
                <div class="m-3">
                    <h3 class="text-lg font-semibold">BTS Communication des Entreprises</h3>
                    <p class="ml-6">2001 <strong>Lycée Sainte-Marie</strong> Cholet
                    </p>
                </div>
                <div class="m-3">
                    <h3 class="text-lg font-semibold">BAC STT option Actions et Communications Commerciales</h3>
                    <p class="ml-6">1999 <strong>Lycée Sainte-Marie</strong> Cholet
                    </p>
                </div>
            </section>
            <section class="projets">
                <h2 class="text-2xl font-semibold mb-3">Projets</h2>
                <?php foreach ($projets as $projet) {
                ?>    
                <div class="m-3">
                    <h3 class="text-lg font-semibold"><?= $projet['description']; ?></h3>
                    <p class="ml-6 mb-2"><?= $projet['periode']; ?>
                        <?php foreach ($projet['actions'] as $action) {
                        ?>    
                        <li class="ml-6"><?= $action; ?></li>
                        <?php }
                        ?> 
                    </p>
                </div>
                <?php }
                ?>
            </section>
            <section class="xp">
                <h2 class="text-2xl font-semibold mb-3">Expériences professionnelles</h2>
                <?php foreach ($experiences as $experience) {
                ?>
                <div class="m-4">
                    <h3 class="text-lg font-semibold"><?= $experience['description']; ?></h3>
                    <p class="ml-6 mb-2"><?= $experience['periode']; ?>
                    </p>
                </div>                
                <?php }
                ?>
            </section>
        </main>
        <aside class="colonneDroite w-1/3 flex flex-col justify-between">
            <section class="about">
                <h2 class="text-3xl font-semibold mb-3">Pourquoi moi ?</h2>
                <p class="text-justify">Récemment diplômé en développement web, je recherche ma première 
                    opportunité professionnelle dans ce domaine captivant. Mon objectif est
                    d'acquérir de l'expérience tout en prenant des responsabilités pour
                    favoriser mon développement professionnel.
                </p>
            </section>
            <section class="competences">
                <h2 class="text-3xl font-semibold mb-3">Compétences</h2>
                <?php foreach ($competences as $competence) {
                ?>
                <div class="">
                    <p class="mb-2 font-semibold"><?= $competence; ?></p>
                </div>                    
                <?php }
                ?>
            </section>
            <section class="softSkills">
                <h2 class="text-3xl font-semibold mb-3">Soft skills</h2>
                <div class="mb-2 font-semibold">Mes principaux atouts</div>
                <p>Curiosité - Empathie - Rigueur</p>
            </section>
            <section class="langues">
                <h2 class="text-3xl font-semibold mb-3">Langues</h2>
                <div class="mb-2 font-semibold">Anglais</div>
            </section>
            <section class="interets">
                <h2 class="text-3xl font-semibold mb-3">Centres d'intérêt</h2>
                <div class="mb-2 font-semibold">Adepte de fitness et de guitare</div>
                <div class="mb-2 font-semibold">Fan des Pink Floyd et de Franck Thilliez</div>
            </section>
            <section class="recommandations">
                <h2 class="text-3xl font-semibold mb-3">Recommandation</h2>
                <div class="mb-2 font-semibold">David GAILLARD</div>
                <p>Mentor, OpenClassrooms
                <br>linkedin.com/in/gaillarddavid/</p>
            </section>
            <section class="contact">
                <h2 class="text-3xl font-semibold mb-3">Contact</h2>
                <div class="mb-2 font-semibold"><p>davidbeaumont333@gmail.com
                <br>43 ans - 49300 CHOLET
                <br>06.79.50.59.23</p>
                </div>
            </section>
        </aside>
    </div>
    
</body>
</html>