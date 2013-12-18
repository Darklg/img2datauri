<?php

// Poids maximal d'un fichier uploadé
$poids_maximal_img = 100 * 1024;

// Nom de l'appli
define('IMG2_NAME', 'IMG 2 Data URI - Convertir une image vers un data-uri');

// Préfixe CSS pour IE
define('IMG2_IE_PREFIX', '.lt_ie8');

// Extensions & types acceptés
$types_img = array(
    'png' => 'image/png',
    'jpg' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'bmp' => 'image/bmp',
    'gif' => 'image/gif'
);