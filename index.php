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
    include_once('template-parts/elements.php'); 
    ?>
    <div class="wrapperTailwind p-5 md:flex sm: text-sm lg:text-lg lg:p-9"><!-- wrapper de contenu tailwindcss -->
        <main class="colonneGauche lg:w-2/3 flex flex-col gap-5">
            <section class="flex sm: flex-col lg:flex-row justify-between items-center p-2 hover:animate-loupe">
                <div class="presentation flex flex-row items-center">
                    <img class="m-3" src="./img/id.jpg" alt="photo de profil"/>
                    <h1 class="lg:text-4xl ml-5"><span class="lg:text-4xl font-bold uppercase">David BEAUMONT</span>
                    <br>Développeur web junior</h1>
                </div>
                <div class="links flex lg:flex-col p-5">
                    <div class="github">
                        <a href="https://github.com/davidbeaumont" class="flex flex-row m-3 hover:animate-scale">
                            <i class="fa-brands fa-github mx-3"></i>
                            <p>/davidbeaumont</p>    
                        </a>
                    </div>
                    <div class="linkedIn">
                        <a href="https://www.linkedin.com/in/beaumont-david/" class="flex flex-row m-3 hover:animate-scale">
                            <i class="fa-brands fa-linkedin mx-3"></i>
                            <p>/beaumont-david</p>
                        </a>
                    </div>    
                </div>
            </section>
            <section class="infos grid grid-cols-2 grid-rows-2 hover:animate-loupe">
                <a href="http://davidbeaumont.site" class="flex flex-row m-2 hover:animate-scale">
                    <i class="fa-solid fa-link mx-3"></i>
                    <p>portfolio <i class="fa-solid fa-arrow-right text-sm"></i> davidbeaumont.site</p>
                </a>
                <div class="flex flex-row m-2">
                    <i class="fa-solid fa-house-laptop mx-3"></i>
                    <p>Télétravail ou présentiel</p>                
                </div>
                <div class="flex flex-row m-2">
                    <i class="fa-solid fa-house mx-3"></i>
                    <p>49300 CHOLET</p>
                </div>
                <div class="flex flex-row m-2">
                    <i class="fa-solid fa-location-dot mx-3"></i>
                    <p>Temps plein</p>                
                </div>
            </section>
            <section class="formatio hover:animate-loupe">
                <h2 class="lg:text-2xl font-semibold mb-3">Diplômes et Formations</h2>
                <div class="m-3">
                    <h3 class="lg:text-lg font-semibold">Formation développeur WordPress (niveau 5 - Bac+2)</h3>
                    <p class="ml-6">D'avril 2023 à décembre 2023 <strong>OpenClassrooms</strong> en distanciel
                    </p>
                </div>
                <div class="m-3">
                    <h3 class="lg:text-lg font-semibold">BTS Communication des Entreprises</h3>
                    <p class="ml-6">2001 <strong>Lycée Sainte-Marie</strong> Cholet
                    </p>
                </div>
                <div class="m-3">
                    <h3 class="lg:text-lg font-semibold">BAC STT option Actions et Communications Commerciales</h3>
                    <p class="ml-6">1999 <strong>Lycée Sainte-Marie</strong> Cholet
                    </p>
                </div>
            </section>
            <section class="projets hover:animate-loupe">
                <h2 class="lg:text-2xl font-semibold mb-3">Projets</h2>
                <?php foreach ($projets as $projet) {
                ?>    
                <div class="m-3">
                    <h3 class="lg:text-lg font-semibold"><?= $projet['description']; ?></h3>
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
            <section class="xp hover:animate-loupe">
                <h2 class="lg:text-2xl font-semibold mb-3">Expériences professionnelles</h2>
                <?php foreach ($experiences as $experience) {
                ?>
                <div class="m-4">
                    <h3 class="lg:text-lg font-semibold"><?= $experience['description']; ?></h3>
                    <p class="ml-6 mb-2"><?= $experience['periode']; ?>
                    </p>
                </div>                
                <?php }
                ?>
            </section>
        </main>
        <aside class="colonneDroite sm:pt-4 lg:w-1/3 flex flex-col gap-5">
            <section class="about p-8 hover:animate-loupe">
                <h2 class="lg:text-3xl font-semibold mb-3">Pourquoi moi ?</h2>
                <p class="text-justify">Récemment diplômé en développement web, je recherche ma première 
                    opportunité professionnelle dans ce domaine captivant. Mon objectif est
                    d'acquérir de l'expérience tout en prenant des responsabilités pour
                    favoriser mon développement professionnel.
                </p>
            </section>
            <section class="competences p-8 hover:animate-loupe">
                <h2 class="lg:text-3xl font-semibold mb-3">Compétences</h2>
                <?php foreach ($competences as $competence) { ?>
                    <div class="flex justify-between">
                        <?php if ($competence['link'] !== '#') { ?>
                            <a href="<?= $competence['link']; ?>" class="flex hover:animate-scale">
                                <p class="mb-2 font-semibold"><?= $competence['text']; ?></p>
                            </a>
                        <?php } else { ?>
                            <p class="mb-2 font-semibold"><?= $competence['text']; ?></p>
                        <?php } ?>

                        <?php if (isset($competence['level']) && $competence['level'] >= 1 && $competence['level'] <= 5) { ?>
                            <div class="">
                                <?php for ($i = 1; $i <= 5; $i++) { ?>
                                    <?php if ($i <= $competence['level']) { ?>
                                        <span class="text-yellow-500 text-2xl">★</span>
                                    <?php } else { ?>
                                        <span class="text-gray-300 text-2xl">★</span>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </section>
            <section class="softSkills p-8 hover:animate-loupe">
                <h2 class="lg:text-3xl font-semibold mb-3">Soft skills</h2>
                <div class="mb-2 font-semibold">Mes principaux atouts</div>
                <p>Curiosité - Empathie - Rigueur</p>
            </section>
            <section class="langues p-8 hover:animate-loupe">
                <h2 class="lg:text-3xl font-semibold mb-3">Langues</h2>
                <div class="mb-2 font-semibold">Anglais</div>
            </section>
            <section class="interets p-8 hover:animate-loupe">
                <h2 class="lg:text-3xl font-semibold mb-3">Centres d'intérêt</h2>
                <div class="mb-2 font-semibold">Adepte de fitness et de guitare</div>
                <div class="mb-2 font-semibold">Fan des Pink Floyd et de Franck Thilliez</div>
            </section>
            <section class="recommandations p-8 hover:animate-loupe">
                <h2 class="lg:text-3xl font-semibold mb-3">Recommandation</h2>
                    <div class="mb-2 font-semibold">David GAILLARD</div>
                    <p>Mentor, OpenClassrooms</p>
                    <a href="https://www.linkedin.com/in/beaumont-david/details/recommendations/"
                    class="flex hover:animate-scale">
                        <p>linkedin.com/in/gaillarddavid/</p>  
                    </a>
            </section>
            <section class="contact p-8 hover:animate-loupe">
                <h2 class="lg:text-3xl font-semibold mb-3">Contact</h2>
                <div class="mb-2 font-semibold">
                    <p><a href="mailto:davidbeaumont333@gmail.com" class="flex hover:animate-scale">davidbeaumont333@gmail.com</a></p>
                <p>43 ans - 49300 CHOLET</p>
                <p>06.79.50.59.23</p>
                </div>
            </section>
        </aside>
    </div>
    
</body>
</html>