<?php
include dirname(__FILE__) . '/inc/config.php';
include dirname(__FILE__) . '/inc/traitement.php';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <title><?php echo IMG2_NAME; ?></title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
        <div class="img-form-wrap"><img src="img/download-cloud.svg" width="48" height="48" alt="" /></div>
        <div class="main-container">
        <h1><?php echo IMG2_NAME; ?></h1>
        <?php echo $retour; ?>
        <form method="post" enctype="multipart/form-data" action="" id="img2-form">
            <div>
                <fieldset>
                    <legend>Sélectionnez un fichier ou une URL</legend>
                    <div class="grid">
                        <div class="col">
                            <label for="img2-file">Fichier : </label><br />
                            <input id="img2-file" type="file" name="fichier" size="30" />
                        </div>
                        <div class="col">
                            <label for="img2-url">URL :</label><br />
                            <input id="img2-url" type="text" name="url" value="" id="url">
                        </div>
                    </div>
                </fieldset>
                <fieldset id="fieldset-options">
                    <legend>Options</legend>
                    <div class="grid">
                        <div class="col">
                            <label for="img2-selector">Selecteur CSS :</label><br />
                            <input id="img2-selector" type="text" name="selecteur" size="30" value=".maclass" />
                        </div>
                        <div class="col">
                            <label>Compatibilité IE</label><br />
                            <ul>
                                <li><label><input type="radio" value="0" name="active_ie" checked="checked" />Non</label></li>
                                <li><label><input type="radio" value="2" name="active_ie" />Oui</label></li>
                            </ul>
                        </div>
                    </div>
                </fieldset>
                <a href="#" id="display-fieldset-options">Plus d'options</a>
                <input type="submit" name="upload" value="Uploader" />
            </div>
        </form>
        <a href="https://github.com/Darklg/img2datauri" target="_blank" style="position:fixed;top:0;right:0;"><img src="img/fork-me.png" width="149" height="149" alt="Fork Me" /></a>
        </div>
        <script src="js/utilities.js"></script>
        <script src="js/global.js"></script>
    </body>
</html>


