<?php

if (empty($erreurs)) {
    $data_uri = 'data:' . $type_file . ';base64,' . $base_64_file;
    $retour = '<pre>' . $selecteur . ' {' . "\n";
    $retour .= "\t" . 'background-image:url(' . $data_uri . ');' . "\n";
    $retour .= '}' . "\n";
    if (isset($_POST['active_ie'])) {
        $retour .= $selecteur_ie . ' {' . "\n";
        $retour .= "\t" . 'background-image:url(' . $name_file . ');' . "\n";
        $retour .= '}';
    }
    $retour .= '</pre>';
    $retour .= '<div style="width:64px;height:64px;background:#cccccc url(' . $data_uri . ') no-repeat center center;border:1px solid #ccc;"></div>';
} else {
    foreach ($erreurs as &$erreur)
        $erreur = '<li>' . $erreur . '</li>';
    $retour = '<p>Aie aie aie !</p><ul>' . implode('', $erreurs) . '</ul>';
}