<!DOCTYPE html>
<!-- 
     Page web créé dans le cadre du cours de web Dev le 01/09/2018
     Auteur : José GIL
     Email : jgil83000@gmail.com
-->

<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Sécurité et confort, nos priorités !</title>
        <meta charset="UTF-8">
        <meta name="author" content="José GIL">
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <script src="https://kit.fontawesome.com/1be38e6a58.js" crossorigin="anonymous"></script>
        <link rel="icon" href="favicon.ico">
    </head>
    <body>

        <section>

        </section>
        <?php
        include('./includes/header.html.inc.php');
        include('./includes/conexiondb.php');
        ?>

        <section id="principal">
            <article>

                <img src="images/post-it.png" alt="Post-It : Penser à rentrer en vie">
                <p>
                <div class="content">
                    <?php if (isset($_SESSION['success'])): ?>
                        <div class ="error succes">
                            <h3>
                                <?php
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success'])
                                ?>
                            </h3>
                        </div>
                    <?php endif ?>

                    <?php if (isset($_SESSION['username'])): ?>
                        <p>Bienvenue <strong><?php echo $_SESSION['username']; ?></strong></p>
                        <p><a href="" style="color : red;">Se déconnecter</a></p>
                    <?php endif ?>
                    </p>
                </div>
                
                
                
                
                </div>
                Au-delà de l'obligation légale, le port d'un casque est le garant de votre
                sécurité. Le choix de votre casque doit se faire en fonction de vos besoins 
                (route, cross, piste...).
                </p>
                <p>
                    Spécialiste reconnu dans l'univers de la sécurité du deux-roues, Nolark vous 
                    propose des milliers de modèles de casques disponibles au travers de plus de 
                    50 marques. Vous trouverez ici tous les types de casques moto : jet, intégral, 
                    modulable, transformable, piste, cross ou encore un large choix de casques 
                    moto enfant (taille et poids spécialement adaptés).
                </p>
                <p>
                    Nolark c'est également la disponibilité de toutes les couleurs et matières et 
                    ce, pour toutes les bourses.
                </p>
                <p>
                    Une question ? Un conseil ? Nos conseillers sont là pour vous aiguiller afin 
                    de trouver le modèle qui correspond à vos besoins.
                </p>
                <p>
                    Nolark n'est pas seulement un magasin de casques, c'est avant tout une équipe 
                    de passionnés qui sélectionnent pour vous les meilleurs casques moto afin de 
                    répondre au mieux à vos attentes.
                </p>
            </article>
            <aside>
                <img src="images/conseilcasque01.jpg" alt="Conseil du mois : Casque Cross">
                <p>Pour le style: Furious replica</p>
                <img src="images/conseilcasque02.jpg" alt="Conseil du mois : Intgéral Piste">
                <p>Pour le confort: Stars racing</p>
            </aside>


        </section>

        <section id="thematique">
            <h1>Catégories les plus populaires</h1>
            <article id="gauche"><a href="pages/route.php">Route</a></article>
            <article id="milieu"><a href="pages/cross.php">Cross</a></article>
            <article id="droite"><a href="pages/piste.php">Piste</a></article>
        </section>

        <div class="wrapper">
            <ul>
                <li><a href="https://www.facebook.com/leo.chastagnac.7"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://twitter.com/mvrtkun/status/1250100826099638273"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/l%C3%A9o-chastagnac-87a522182/"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="https://www.twitch.tv/directory"><i class="fab fa-twitch"></i></a></li>
            </ul>
        </div>
        <?php
        include('./includes/footer.inc.php');
        ?>
    </body>
</html>
