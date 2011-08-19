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
        <h1><?php echo IMG2_NAME; ?></h1>
        <?php echo $retour; ?>
        <form method="post" enctype="multipart/form-data" action="" id="form">
            <div>
                <label>
                    Selecteur :
                    <input type="text" name="selecteur" size="30" value=".maclass" />
                </label><br />
                <input type="file" name="fichier" size="30" /><br />
                <label>
                    URL :
                    <input type="text" name="url" value="" id="url">
                </label> <br />
                <label>
                    <input type="checkbox" name="active_ie" checked="checked" />
                    Compatibilité IE
                </label><br />
                <input type="submit" name="upload" value="Uploader" />
            </div>
        </form>
    </body>
</html>


