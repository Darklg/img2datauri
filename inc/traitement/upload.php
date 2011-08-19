<?php

if (!is_dir($content_dir)) {
    @mkdir($content_dir, 0777);
    chmod($content_dir, 0777);
}

// Basé sur http://phpcodeur.net/articles/php/upload
$tmp_file = $_FILES['fichier']['tmp_name'];
if (!is_uploaded_file($tmp_file))
    $erreurs[] = "Le fichier est introuvable";

// On teste le poids du fichier
if (empty($erreurs) && $_FILES['fichier']['size'] >= $poids_maximal_img)
    $erreurs[] = "Le fichier est trop lourd";

// On vérifie le type du fichier
$type_file = $_FILES['fichier']['type'];
if (empty($erreurs) && !in_array($type_file, $types_img))
    $erreurs[] = "Le fichier n'est pas une image";

$name_file = $_FILES['fichier']['name'];
// On recherche des caractères invalides dans le nom du fichier
if (empty($erreurs) && preg_match('#[\x00-\x1F\x7F-\x9F/\\\\]#', $name_file))
    $erreurs[] = "Nom de fichier non valide";

if (empty($erreurs)) {
    // on copie le fichier dans le dossier de destination
    if (!move_uploaded_file($tmp_file, $content_dir . $name_file))
        $erreurs[] = "Echec de l'upload";
    else {
        $base_64_file = base64_encode(file_get_contents($content_dir . $name_file));
        $name_file = '../images/' . $name_file;
    }
}

// Suppression du fichier uploadé
@unlink($content_dir . $name_file);
