<?php

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

// On recupere le contenu du fichier
$name_file = strip_tags($_FILES['fichier']['name']);
if (empty($erreurs)) {
    $base_64_file = base64_encode(file_get_contents($tmp_file));
    $poids_file = strlen(file_get_contents($tmp_file));
    $name_file = '../images/' . $name_file;
}

// Suppression du fichier uploadé
@unlink($tmp_file);