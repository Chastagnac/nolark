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
        <meta name="author" content="Léo Chastagnsac">
        <meta name="description" content="Simulateur de salaire pour les employés !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
        <script src="../JavaScript/livrexpress.js" type="module"></script>
    </head>
    <body>
         <?php
            include('../includes/header.html.inc.php');
            ?>
        <div class ="blur">
            <h1><hr><center>Simulateur pour les transporteur</center><hr></h1>
        </div>
        <section id="formulaire">
            <h1>Simulateur de prime annuelle pour les chauffeurs de Livr'Express :</h1>
            <form id="form_simulateur" name="form_simulateur">
                <fieldset id="recueilinfos">
                    <legend>Vos informations : </legend>
                    <p>
                        <label for="nb_accidents">Nombre d'accidents :</label>
                        <input type="range" name="nb_accidents" id="nb_accidents" min="0" max="9" value="0">
                        <output for="nb_accidents" id="o_nb_accidents">0</output>
                    </p>
                    <p>
                        <label for="nb_ancien">Nombre d'années d'ancienneté :</label>
                        <input type="number" name="nb_ancien" id="nb_ancien" min="0" max="50" value="0">
                    </p>
                    <p>
                        <label for="nb_km">Nombre de kilomètres parcourus :</label>
                        <input type="number" name="nb_km" id="nb_km" min="0" max="999999" value="0">
                    </p>
                </fieldset>
                <p id="controles">
                    <input type="reset" id="btn_annuler" value="Effacer les données">
                </p>
            </form>
        </section>
    </body>
</html>
