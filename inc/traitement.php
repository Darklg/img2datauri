<?php
$retour = '';
if (isset($_POST['upload'])) {
    // Variables  par défaut
    $base_64_file = '';
    $type_file = '';
    $name_file = '';
    $retour_ok = true;
    $erreurs = array();

    // On teste le sélecteur CSS Fourni
    include dirname(__FILE__) . '/traitement/selecteur.php';

    // On utilise le fichier uploadé
    if (isset($_FILES['fichier']) && $_FILES['fichier']['size'] > 0)
        include dirname(__FILE__) . '/traitement/upload.php';
    // Si le fichier uploadé est invalide, on teste l'URL
    elseif (!empty($_POST['url']) && filter_var($_POST['url'], FILTER_VALIDATE_URL) !== FALSE)
        include dirname(__FILE__) . '/traitement/distant.php';
    // Sinon, tant pis.
    else
        $erreurs[] = 'Aucun fichier valide transmis';

    include dirname(__FILE__) . '/traitement/resultat.php';

}