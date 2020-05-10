<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Sécurité et confort, nos priorités !</title>
        <meta charset="UTF-8">
        <meta name="author" content="Léo Chastagnac">
        <meta name="description" content="Simulateur de salaire pour les employés !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
        <script src="../JavaScript/remuneration.js"></script>
    </head>
    <body>
 <?php
            include('../includes/header.html.inc.php');
            ?>
            
        <div class ="blur">
           
            <h1><hr><center>Simulateur de salaire</center><hr></h1>
        </div>
        <section id="simulateur">
            <article id="salaire">
                <form id="form_contact" name="form_contact" action="http://btssio.bonaparte.free.fr/testforms.php">
                    <fieldset id="infos">
                        <legend id = "connaitre" >Quel sera votre prochain salaire ! :</legend>
                        </p>
                        <p>
                            <label for="votre_anciennete">Depuis combien de tmeps êtes vous dans l'entreprise ? </label>
                            <input type="text" name="aciennete" id="num_ancien" size="10" required>
                        </p>
                        <p>
                            <label for="votre_salaire">Combien de casque X-Spirit avez vous vendus  ? </label>
                            <input type="number" name="vente de x_spirit" id="num_xspirit" size="10">
                        </p>
                        <p>
                            <label for="votre_salaire">Combien de casque Multitec avez vous vendus  ?</label>
                            <input type="number" name="vente de Multitec" id="num_multi" size="10">                              
                        </p>
                        <p>
                            <label for="votre_salaire">Combien de casque S 20 avez vous vendus  ?</label>
                            <input type="number" name="vente de S 20" id="num_s20" size="10">                              
                        </p>


                    </fieldset>

                    <section id="remuneration">
                        <input type="button" value="click" id = "btn_calculer">
                        <input type="reset" value="Effacer les réponses">
                    </section> 
                </form>
            </article>
        </section>
    </body>
</html>
