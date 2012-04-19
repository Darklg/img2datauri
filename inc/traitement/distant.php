<?php

$url = $_POST['url'];
$url_details = parse_url($url);

// Si l'URL contient des indices sur un fichier avec extension
if (!empty($url_details['path']) && strstr($url_details['path'], '.')) {
    // On teste si l'extension correspond à une image
    $ext = substr(strtolower(strrchr($url_details['path'], ".")), 1);
    if (array_key_exists($ext, $types_img)) {

        // On telecharge le contenu de l'URL
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERAGENT, IMG2_NAME);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        // On teste si le téléchargement a fonctionné
        if (empty($result))
            $erreurs[] = 'Aucun fichier n\'a pu être récupéré.';
        else {
            $type_file = $types_img[$ext];
			$poids_file = strlen($result);
            $name_file = $url;
            $base_64_file = base64_encode($result);
        }
    } else
        $erreurs[] = 'Le fichier n\'a pas l\'air d\'être une image';
} else
    $erreurs[] = 'Aucun fichier n\'a pu être trouvé.';
