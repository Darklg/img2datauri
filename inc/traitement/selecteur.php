<?php

$selecteur = '.maclass';
$selecteur_ie = IMG2_IE_PREFIX . ' .maclass';
// Si on reçoit un selecteur CSS non vide
if (isset($_POST['selecteur']) && !empty($_POST['selecteur'])) {
    $selecteur = strip_tags($_POST['selecteur']);
    $selecteurs = explode(',', $selecteur);
    if (isset($_POST['active_ie'])) {
        // On préfixe le sélecteur, ou chacun de ses composants séparés par une virgule, par un préfixe IE8
        foreach ($selecteurs as &$selecteur_tmp)
            $selecteur_tmp = IMG2_IE_PREFIX . ' ' . $selecteur_tmp;
        $selecteur_ie = implode(', ', $selecteurs);
    }
}