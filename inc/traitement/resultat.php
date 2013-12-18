<?php

$compat_ie = ( isset( $_POST['active_ie'] ) && ctype_digit( $_POST['active_ie'] ) ) ? $_POST['active_ie'] : 0;


if ( empty( $erreurs ) ) {
    $data_uri = 'data:' . $type_file . ';base64,' . $base_64_file;
    $retour = '<pre>' . $selecteur . ' {' . "\n";
    $retour .= "\t" . 'background-image:url(' . $data_uri . ');' . "\n";
    $retour .= '}' . "\n";
    if ( $compat_ie != '0' ) {
        $retour .= $selecteur_ie . ' {' . "\n";
        $retour .= "\t" . 'background-image:url(' . $name_file . ');' . "\n";
        $retour .= '}';
    }
    $retour .= '</pre>';


    $retour .= '<div class="demo">';

    $retour .= '<div class="demo-img" style="background-image: url(' . $data_uri . ');"></div>';

    $retour .= '<div class="demo-content">';
    $retour .= '<p><strong>Stats</strong></p>';
    $retour .= '<small><strong>data-uri</strong> : '.strlen( $data_uri ).' chars</small><br />';
    $retour .= '<small><strong>original</strong> : '.$poids_file.' octets</small>';
    $retour .= '</div>';

    $retour .= '</div>';

} else {
    foreach ( $erreurs as &$erreur )
        $erreur = '<li>' . $erreur . '</li>';
    $retour = '<p>Aie aie aie !</p><ul>' . implode( '', $erreurs ) . '</ul>';
}
