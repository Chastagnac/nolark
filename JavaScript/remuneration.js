window.addEventListener("load", function () {

    window.document.querySelector("#btn_calculer").addEventListener("click", function () {
        // Déclaration des constantes
        const fixe = 1100;
        // (déclenche une erreur dans NetBeans, ne pas en tenir compte !)


        // Déclaration des variables
        var nbAncien = parseInt(window.document.querySelector("#num_ancien").value);
        var nbS20 = parseInt(window.document.querySelector("#num_s20").value);
        var nbXS = parseInt(window.document.querySelector("#num_xspirit").value);
        var nbMulti = parseInt(window.document.querySelector("#num_multi").value);
        var remuneration = recupPrimeAnciennete(nbAncien, fixe)
                + recupComS20(nbS20) + recupComXS(nbXS)
                + recupComMulti(nbMulti);
        // Affichage du résultat
        window.document.querySelector("#remuneration").innerHTML =
                "La rémunération sera de : " + remuneration + " €";
    }, false);
}, false);

/**
 * Fonction qui retourne la prime d'ancienneté
 * @param {integer} nb
 * @param {float} fixe
 * @returns {float}
 */
function recupPrimeAnciennete(nbAncieneteCamion)
{
    var nbAncienMin = 4, txapres4ans = 30;
    var txAncienMin = 300;
    if (nbAncieneteCamion > nbAncienMin)
    {
        while (nbAncieneteCamion !== nbAncienMin)
        {
            txAncienMin = txAncienMin + txapres4ans;
            nbAncienMin = txAncienMin + 1;
        }     
        return txAncienMin;
    }    
    else
    {
        return txAncienMin;
    }
}





/**
 * Fonction qui retourne la commission sur le S20
 * @param {integer} nb
 * @returns {float}
 */
function recupComS20(nb) {
    const prixS20 = 140.0, txComS20 = 0.02;
    return (nb * prixS20 * txComS20);
}
/**
 * Fonction qui retourne la commission sur le X-Spirit
 * @@param {integer} nbXS
 * @returns {float}
 */
function recupComXS(nb) {
    const prixXS = 350.0, nbXSMinCom = 50, txComXS = 0.06;
    if (nb >= nbXSMinCom) {
        return ((nb - nbXSMinCom) * prixXS * txComXS);
    } else {
        return 0.0;
    }
}
/**
 * Fonction qui retourne la commission sur le Multitec
 * @param {integer} nb
 * @returns {float}
 */
function recupComMulti(nb) {
    const prixMu = 180.0, nbMultiTranche1 = 20, nbMultiTranche2 = 50;
    const txMultiTranche1 = 0.04, txMultiTranche2 = 0.06, txMultiTranche3 = 0.1;
    if (nb <= nbMultiTranche1) {
        return (nb * prixMu * txMultiTranche1);
    } else if (nb <= nbMultiTranche2) {
        return ((nbMultiTranche1 * prixMu * txMultiTranche1)
                + ((nb - nbMultiTranche1) * prixMu * txMultiTranche2));
    } else {
        return ((nbMulticTranche1 * prixMu * txMultiTranche1)
                + ((nbMultiTranche2 - nbMultiTranche1) * prixMu * txMultiTranche2)
                + ((nb - nbMultiTranche2) * prixMu * txMultiTranche3));
    }
}

window.addEventListener("load", function () {
    window.document.querySelector("#num_ancien").addEventListener("keyup", function () {
        // traitements
    }, false);
    window.document.querySelector("#num_s20").addEventListener("keyup", function () {
        // traitements
    }, false);
    window.document.querySelector("#num_xspirit").addEventListener("keyup", function () {
        // traitements
    }, false);
    window.document.querySelector("#num_multi").addEventListener("keyup", function () {
        // traitements
    }, false);
    window.document.querySelector("#num_km").addEventListener("keyup", function () {
        // traitements
    }, false);
}, false);


window.addEventListener("load", function () {
    // Déclaration de l'index de parcours
    var i;
    // tabInputs est une collection de <input>
    var tabInputs = window.document.querySelectorAll("input");
    // Parcours de tabInputs en s'appuyant sur le nombre de <input>
    for (i = 0; i < tabInputs.length; i++) {
        // Ajout d'un Listener sur tous les <input> sur l'évènement onKeyUp
        tabInputs[i].addEventListener("keyup", function () {
            // traitements
        }, false);
    }
}, false);
