<?php

$compat_ie = ( isset( $_POST['active_ie'] ) && ctype_digit( $_POST['active_ie'] ) ) ? $_POST['active_ie'] : 0;

if ( empty( $erreurs ) ) {

    if($type_file == 'image/svg+xml'){
        $base_64_file_raw = str_replace(array('onload','onLoad'),'data-onload',$base_64_file_raw);
        $base_64_file_raw = str_replace(array('<script','</script>'),array('<test','</test>'),$base_64_file_raw);
    }
    $base_64_file = base64_encode($base_64_file_raw);

    $data_uri = 'data:' . $type_file . ';base64,' . $base_64_file;
    $retour = '<pre>' . $selecteur . ' {' . "\n";
    $retour .= "\t" . 'background-image: url(' . $data_uri . ');' . "\n";
    $retour .= '}' . "\n";
    if ( $compat_ie != '0' ) {
        $retour .= $selecteur_ie . ' {' . "\n";
        $retour .= "\t" . 'background-image: url(' . $name_file . ');' . "\n";
        $retour .= '}';
    }
    $retour .= '</pre>';
    $retour .= '<textarea id="rawbase64" rows="1" cols="70">'.$data_uri.'</textarea>';


    $retour .= '<div class="demo">';

    $retour .= '<div class="demo-img" style="background-image: url(' . $data_uri . ');"></div>';

    $retour .= '<div class="demo-content">';
    $retour .= '<p><strong>Stats</strong></p>';
    $retour .= '<small><strong>data-uri</strong> : '.strlen( $data_uri ).' chars</small><br />';
    $retour .= '<small><strong>original</strong> : '.$poids_file.' octets</small>';
    $retour .= '</div>';

    $retour .= '</div>';

} else {
    $retour = '<p>Aie aie aie !</p><ul><li>' . implode( '</li><li>', $erreurs ) . '</li></ul>';
}
